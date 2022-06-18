<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guide = 'gallery';
    protected $table = 'gallery';
    protected $fillable =["FName","LName","Email","Phone","description"];
}
