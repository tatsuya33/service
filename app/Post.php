<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['ramen_name', 'address', 'kind','price','comment'];

}
