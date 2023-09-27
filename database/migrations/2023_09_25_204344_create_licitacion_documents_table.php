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
        Schema::create('licitacion_documents', function (Blueprint $table) {
            $table->id();
            $table->string('licitacion_1')->nullable();
            $table->string('licitacion_2')->nullable();
            $table->string('licitacion_3')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licitacion_documents');
    }
};
