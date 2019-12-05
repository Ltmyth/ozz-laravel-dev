<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    //table
    protected $table ="shares";

    //pk
    public $primaryKey = "id";

    //timestamps

    public $timestamps = true;
}