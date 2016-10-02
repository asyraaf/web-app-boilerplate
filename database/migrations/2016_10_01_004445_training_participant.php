<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrainingParticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_participant', function (Blueprint $table) {
            $table->integer('training_id');
            $table->integer('user_id');
            $table->tinyInteger('absence');
            $table->tinyInteger('status');
            $table->text('feedback')->nullable();
            $table->text('testimonial')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_participant');
    }
}
