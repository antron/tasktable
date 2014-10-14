<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasktableTasksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('tt_tasks', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('status');
            $table->text('detail');
            $table->string('userid');
            $table->integer('important');
            $table->date('date_occurrence');
            $table->date('date_period_will');
            $table->date('date_period_done');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('tt_tasks');
    }

}
