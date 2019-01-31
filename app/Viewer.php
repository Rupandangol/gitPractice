<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewer extends Model
{
    protected $table = 'viewers';
    protected $fillable = ['username', 'password','address1','address2'];

}
