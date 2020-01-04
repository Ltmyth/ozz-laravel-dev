<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
     //table
    protected $table ="sms";

    //pk
    public $primaryKey = "id";

    //timestamps

    public $timestamps = true;
}
