<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nyeremeny', function (Blueprint $table) {
            $table->id();
            $table->foreignId('huzasid')
                  ->constrained('huzas')
                  ->cascadeOnDelete();
            $table->unsignedTinyInteger('talalat');   // 2,3,4,5,6
            $table->unsignedInteger('darab');         // nyertes szelvény db
            $table->unsignedBigInteger('ertek');      // Ft
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nyeremeny');
    }
};
