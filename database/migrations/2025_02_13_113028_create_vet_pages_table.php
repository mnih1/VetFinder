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
        Schema::create('vet_pages', function (Blueprint $table) {
            $table->id('vetpage_ID');
            $table->foreignId('user_id')->references('id')->on('vetLogin');
            $table->string('vetPage_ProfilePicture');
            $table->string('vetPage_Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vet_pages');
    }
};
