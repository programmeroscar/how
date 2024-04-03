<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Baseload extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'baseload';
    protected $fillable = ['name','device','deviceType','baseload'];
}
