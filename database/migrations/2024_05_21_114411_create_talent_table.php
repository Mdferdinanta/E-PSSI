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
        Schema::create('talent', function (Blueprint $table) {
            $table->id('talent_id');
            $table->string('talent_name');
            $table->integer('age');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->integer('weight');
            $table->integer('height');
            $table->enum('role', ['cf', 'rwf', 'lwf', 'am', 'cm', 'rm', 'lm', 'dm', 'rwb', 'lwb', 'cb', 'gk'])->default('cf');
            $table->integer('rating');
            $table->string('status');
            $table->string('image');
            $table->string('video');
            $table->foreignId('coach_id')->constrained('coaches', 'coach_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talent');
    }
};
