<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proplem extends Model
{
    use HasFactory;

    public $fillable=['name','desc','email','number'];
}
