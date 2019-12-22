<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //table
    protected $table ="comments";

    //pk
    public $primaryKey = "id";

    //timestamps

    public $timestamps = true;
}
