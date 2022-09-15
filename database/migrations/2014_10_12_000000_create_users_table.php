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
            $table->string('email')->nullable();
            $table->string('fname');
            $table->string('mname');
            $table->string('unit');
            $table->double('payable_amount')->nullable();
            $table->string('phone');
            $table->string('ssc_roll');
            $table->string('ssc_board');
            $table->string('ssc_year');
            $table->string('ssc_group');
            $table->string('ssc_reg');
            $table->string('ssc_gpa');
            $table->string('hsc_roll');
            $table->string('hsc_board');
            $table->string('hsc_year');
            $table->string('hsc_group');
            $table->string('hsc_reg');
            $table->string('hsc_gpa');
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
