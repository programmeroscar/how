<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Error extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'error';
    protected $fillable = ['name','device','deviceType','error','other'];
}
