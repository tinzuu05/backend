<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'title', 'sub_title', 'content', 'image_url'
    ];
}
