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
        Schema::create('goalkeeper_ks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talent_id')->constrained('talent', 'talent_id')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('diving');
            $table->integer('handling');
            $table->integer('kicking');
            $table->integer('reflexes');
            $table->integer('speed');
            $table->integer('positioning');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goalkeeper_ks');
    }
};
