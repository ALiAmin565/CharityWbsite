<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopNav extends Model
{
    use HasFactory;

    protected $table = 'topnav';

    protected $fillable = ['location','email','facebook','instagram','twitter','whatsapp','youtube','linkedin'];
}
