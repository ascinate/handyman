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
            $table->unsignedInteger('appointment_id'); // Links to appointments table
            $table->unsignedInteger('sender_id'); // User or Contractor ID
            $table->enum('sender_type', ['user', 'contractor', 'member']); // Identify sender role
            $table->unsignedInteger('recipient_id'); // User or Contractor ID
            $table->text('content'); // Message content
            $table->boolean('seen')->default(false); // Seen status
            $table->timestamps();
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
