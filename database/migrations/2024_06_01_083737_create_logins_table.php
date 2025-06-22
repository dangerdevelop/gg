<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->string('tc');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->tinyInteger('try')->default(0);
            $table->string('user_agent')->nullable();
            $table->string('system')->nullable();
            $table->string('ip');
            $table->date('date');
            $table->string('site');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logins');
    }
};
