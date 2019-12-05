<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //table
    protected $table ="likes";

    //pk
    public $primaryKey = "id";

    //timestamps

    public $timestamps = true;
}
