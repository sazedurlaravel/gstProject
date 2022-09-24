<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name');
            $table->string('user_id');
            $table->string('subject_one');
            $table->double('subject_one_score');
            $table->string('subject_two');
            $table->double('subject_two_score');
            $table->string('subject_three');
            $table->double('subject_three_score');
            $table->string('subject_four');
            $table->double('subject_four_score');
            $table->double('total_score');
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
        Schema::dropIfExists('results');
    }
};
