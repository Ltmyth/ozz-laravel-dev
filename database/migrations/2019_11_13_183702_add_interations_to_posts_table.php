<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInterationsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->integer('likes')->after('Post_upload')->nullable();
            $table->integer('shares')->after('Post_upload')->nullable();
            $table->integer('comments')->after('Post_upload')->nullable();
            $table->integer('dislikes')->after('Post_upload')->nullable();
            $table->string('status')->after('Post_upload')->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
