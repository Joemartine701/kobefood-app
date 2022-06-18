<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $guide = 'contact';
    protected $table = 'contact';
    protected $fillable =["FName","LName","Email","Phone","description"];
}
