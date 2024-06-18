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
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('gender')->default('male');
            $table->string('address');
            $table->integer('weight');
            $table->integer('height');
            $table->string('position');
            $table->string('foot')->default('both');
            $table->integer('rating');
            $table->string('status');
            $table->string('photo');
            $table->string('video');
            $table->foreignId('coach_id')->constrained('coaches')->
                    onUpdate('cascade')->onDelete('cascade');
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
