<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guide = 'products';
    protected $table = 'products';
    protected $fillable =["name","code","color","description","price","image"];
}
