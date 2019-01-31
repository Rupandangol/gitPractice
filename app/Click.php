<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $table='clicks';
    protected $fillable=[
      'name','status','detail','date'
    ];
}
