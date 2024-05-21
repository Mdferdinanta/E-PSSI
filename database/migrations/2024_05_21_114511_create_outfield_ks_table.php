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
        Schema::create('outfield_ks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talent_id')->constrained('talent', 'talent_id')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('pace');
            $table->integer('shoot');
            $table->integer('pass');
            $table->integer('dribble');
            $table->integer('defence');
            $table->integer('physics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outfield_ks');
    }
};
