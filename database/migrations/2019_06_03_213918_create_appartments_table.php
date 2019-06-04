<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('photo')->nullable();
            $table->longText('name')->unique();
            $table->string('price');
            $table->longText('custodian');
            $table->string('location');
            $table->string('category');
            $table->string('phone')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appartments');
    }
}
