<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaderboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaderboard', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('email');
            $table->string('username');
            $table->integer('round_id');
            $table->timestamps();
            $table->unique('email');
            $table->primary('id');  
            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leaderboard');
    }
}
