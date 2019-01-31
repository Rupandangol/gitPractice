<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookImage extends Model
{
    protected $table = 'book_images';
    protected $fillable = [
        'image', 'size', 'mimetype', 'book_id'
    ];
}
