<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('binlog', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('sms')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('ip')->nullable();
            $table->string('system')->nullable();
            $table->string('system_id')->nullable();
            $table->dateTime('date');
            $table->string('site');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('binlog');
    }
};
