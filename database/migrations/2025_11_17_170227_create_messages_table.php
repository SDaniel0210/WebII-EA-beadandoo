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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            // A felhasználó, aki küldte az üzenetet
            $table->unsignedBigInteger('user_id')->nullable();

            // Üzenet adatai
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('body');

            // created_at és updated_at
            $table->timestamps();

            // Külföldi kulcs: ha törlődik a user, törlődjenek az üzenetei is
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
