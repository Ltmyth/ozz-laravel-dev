<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    //table
    protected $table ="dislikes";

    //pk
    public $primaryKey = "id";

    //timestamps

    public $timestamps = true;
}
