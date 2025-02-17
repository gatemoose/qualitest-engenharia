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
        Schema::create('contact_page', function (Blueprint $table) {
            $table->id();
            $table->string('address', 255);
            $table->string('phone', 100);
            $table->string('email', 100);
            $table->string('google_maps_embedding', 255);
            $table->string('social_media', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_page');
    }
};
