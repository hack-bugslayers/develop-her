<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('description')->nullable();
            $table->string('prototype_photo')->nullable();
            $table->timestamps();

            $table->foreign('project_id')
                    ->references('id')
                    ->on('projects');

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
        Schema::dropIfExists('entries');
    }
}
