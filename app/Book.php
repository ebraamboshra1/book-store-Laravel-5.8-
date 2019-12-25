<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "book";
    protected $fillable = [
        'name',
        'Description',
        'img',
        'quantity',
        'price',
        'auther_name',
       ];
}
