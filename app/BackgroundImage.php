<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackgroundImage extends Model
{
    protected $table = 'background_images';
    protected $fillable = [
        'imageName', 'imageSize', 'mimeType'
    ];
}
