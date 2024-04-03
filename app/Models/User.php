<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use \App\Http\Traits\UsesUuid;
    use HasFactory, Notifiable;
    use \OwenIt\Auditing\Auditable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function feedbacks() {
        return $this->hasMany(Feedback::class);
    }

    /**
     * The attributes that are mass assignable.
     * @param string $role
     * @return bool
     */
    public function hasAnyRole(string $role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

    /**
     * The attributes that are mass assignable.
     * @param array $role
     * @return bool
     */
    public function hasAnyRoles(array $role)
    {
        return null !== $this->roles()->whereIn('name', $role)->first();
    }

    protected function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            // check if the value is already a hash (Regex: String begins with '$2y$##$' followed by at least 50 characters)
            if (preg_match('/^\$2y\$[0-9]*\$.{50,}$/', $value)) {
                // if it is so, set the attribute without hashing again
                $this->attributes['password'] = $value;
            } else {
                // else hash the password and set as attribute
                $this->attributes['password'] = Hash::make($value);
            }
            return true;
        }
        return false;
    }

    public function twoFactor()
    {
        return $this->two_factor_secret === NULL;
    }

    public function disableLogin()
    {
        return $this->disable_login === 0;
    }

    public function forcePasswordChange()
    {
        return $this->force_password_change === 0;
    }
    public function lastLogin()
    {
        return $this->last_login_at === NULL;
    }

    public function isProfileOwner()
    {
        return $this->id === Auth::user()->id;
    }
}
