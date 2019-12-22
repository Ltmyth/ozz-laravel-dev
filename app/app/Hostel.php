<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    //table
    protected $table ="Hostels";

    //pk
    public $primaryKey = "id";

    //timestamps
    public $timestamps = true;
}
