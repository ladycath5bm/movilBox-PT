<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 20);
            $table->string('lastname', 20);
            $table->bigInteger('salary');
            $table->foreignId('department_id');
            $table->foreignId('education_level_id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('education_level_id')->references('id')->on('education_levels');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
