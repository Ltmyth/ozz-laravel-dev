<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartment extends Model
{
    //table
    protected $table ="Appartments";

    //pk
    public $primaryKey = "id";

    //timestamps
    public $timestamps = true;
}
