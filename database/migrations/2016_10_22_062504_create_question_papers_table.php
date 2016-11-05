<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionpapers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->tinyInteger("a");
            $table->tinyInteger("b");
            $table->tinyInteger("c");
            $table->tinyInteger("d");
            $table->integer("papercode_id");
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
        Schema::dropIfExists('question_papers');
    }
}