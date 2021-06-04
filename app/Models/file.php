<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_file', 'pdf_file', 'audio_file', 'office_file', 'video_file'
    ];
}
