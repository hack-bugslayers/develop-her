<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rated_to')->unsigned()->nullable();
            $table->integer('rated_by')->unsigned()->nullable();
            $table->integer('project_id')->unsigned();
            $table->text('name');
            $table->timestamps();

            $table->foreign('project_id')
                    ->references('id')
                    ->on('projects');

            $table->foreign('rated_by')
                    ->references('id')
                    ->on('users');

            $table->foreign('rated_to')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
}
