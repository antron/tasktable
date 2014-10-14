<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasktableCommentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tt_comments', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('task_id');
            $table->text('content');
            $table->string('userid');
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
        Schema::drop('tt_comments');
        //

    }

}
