<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'author',
        'title',
        'about'
    ];

    public function get_book_image_using_books(){
        return $this->hasOne('App\BookImage','book_id','id')->latest();
    }
}
