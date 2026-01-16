<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->date('date');
        $table->string('time_range'); // e.g. "9:30 AM – 3:00 PM"
        $table->string('venue');
        $table->string('dress_code')->nullable();
        $table->string('image_path')->nullable(); // For the photo
        $table->boolean('is_upcoming')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
