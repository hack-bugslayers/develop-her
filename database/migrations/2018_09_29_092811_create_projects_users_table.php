<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('projects_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dev_id')->unsigned()->nullable();
            $table->integer('client_id')->unsigned()->nullable();
            $table->integer('project_id')->unsigned();
            $table->integer('entry_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('dev_id')
                    ->references('id')
                    ->on('users');

            $table->foreign('client_id')
                    ->references('id')
                    ->on('users');

            $table->foreign('project_id')
                    ->references('id')
                    ->on('projects');

            $table->foreign('entry_id')
                    ->references('id')
                    ->on('entries');

            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects_users', function (Blueprint $table) {
            Schema::dropIfExists('projects_users');
        });
    }
}
