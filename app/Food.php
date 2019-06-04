<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //table
    protected $table ="Foods";

    //pk
    public $primaryKey = "id";

    //timestamps
    public $timestamps = true;
}
