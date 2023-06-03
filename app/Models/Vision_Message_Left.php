<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vision_Message_Left extends Model
{
    use HasFactory;
    protected $table = 'vision_message_left';
    protected $fillable = [
        'title_vision', 'title_message', 'span_vision', 'span_message', 'text_vision', 'text_message', 'Image_right', 'Image_left',
    ];
}