<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Watt extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'watt';
    protected $fillable = ['name','department','device','error','baseload','hour'];
}
