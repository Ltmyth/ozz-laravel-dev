<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airtime extends Model
{
     //table
    protected $table ="airtime";

    //pk
    public $primaryKey = "id";

    //timestamps

    public $timestamps = true;
}
