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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('center')->nullable();
            $table->string('exam_roll')->nullable();
            $table->string('date_time')->nullable();
            $table->string('unit_name')->nullable();
            $table->double('payable_amount')->nullable();
            $table->string('phone')->nullable();
            $table->string('ssc_roll')->nullable();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_year')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('ssc_reg')->nullable();
            $table->string('ssc_gpa')->nullable();
            $table->string('hsc_roll')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_year')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('hsc_reg')->nullable();
            $table->string('hsc_gpa')->nullable();
            $table->string('img')->nullable();
            $table->string('role');
            $table->tinyInteger('status')->default(0)->comment('0=unpaid,1=paid');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
