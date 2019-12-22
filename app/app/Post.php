<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table
    protected $table ="posts";

    //pk
    public $primaryKey = "id";

    //timestamps

    public $timestamps = true;
}
