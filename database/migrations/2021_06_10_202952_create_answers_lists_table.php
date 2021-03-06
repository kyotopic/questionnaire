<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('userinfo_id')->index();
            $table->integer('gender');
            $table->integer('age');
            $table->integer('residence');
            $table->integer('frequency');
            $table->integer('income');
            $table->json('know');
            $table->json('road');
            $table->integer('like');
            $table->string('coffee_cup');
            $table->json('teapot');
            $table->json('ceramic_cup');
            $table->json('silver_product');
            $table->json('textile');
            $table->json('lacquer');
            $table->integer('interest');
            $table->integer('budget');
            $table->json('answer_ids');
            $table->json('priceforquestion_ids');
            $table->string('question_6')->nullable();
            $table->string('question_7')->nullable();
            $table->string('question_8')->nullable();
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
        Schema::dropIfExists('answers_lists');
    }
}
