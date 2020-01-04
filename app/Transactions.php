<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    //table
    protected $table ="transactions";

    //pk
    public $primaryKey = "id";

    //timestamps

    public $timestamps = true;
}
