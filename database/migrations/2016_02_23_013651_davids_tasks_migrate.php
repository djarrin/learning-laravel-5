<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DavidsTasksMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('davids_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('task_title');
            $table->text('task_description');
            $table->timestamp('task_due_date');
            $table->timestamp('task_start_date');
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
        Schema::drop('davids_tasks');
    }
}
