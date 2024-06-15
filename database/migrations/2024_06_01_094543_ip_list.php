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
        Schema::create('ip_list', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->unique();
            $table->tinyInteger('ban')->default(0);
            $table->timestamp('tarih');
            $table->json('info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ip_list');
    }
};
