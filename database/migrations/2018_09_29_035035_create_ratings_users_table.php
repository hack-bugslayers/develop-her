<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rated_by')->unsigned();
            $table->integer('rated_to')->unsigned();
            $table->integer('rating_id')->unsigned();
            $table->string('value');
            $table->timestamps();

            $table->foreign('rated_by')
                    ->references('id')
                    ->on('users');

            $table->foreign('rated_to')
                    ->references('id')
                    ->on('users');

            $table->foreign('rating_id')
                    ->references('id')
                    ->on('ratings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ratings_user', function (Blueprint $table) {
            Schema::dropIfExists('ratings_user');
        });
    }
}
