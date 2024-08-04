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
    //nullable(); indica que un dato podría ser nulo en la base de datos
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('description',255)->nullable();
            $table->boolean('done')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
