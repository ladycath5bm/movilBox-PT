<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appx_education_level', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('description', 250);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appx_education_level');
    }
};
