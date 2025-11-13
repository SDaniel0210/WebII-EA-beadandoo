<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('huzas', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('ev');
            $table->unsignedTinyInteger('het');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('huzas');
    }
};
