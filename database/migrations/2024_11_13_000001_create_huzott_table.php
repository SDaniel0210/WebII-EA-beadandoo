<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('huzott', function (Blueprint $table) {
            $table->id();
            $table->foreignId('huzasid')
                  ->constrained('huzas')
                  ->cascadeOnDelete();
            $table->unsignedTinyInteger('szam');   // kihúzott szám
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('huzott');
    }
};
