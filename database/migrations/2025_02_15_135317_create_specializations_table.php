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
        Schema::create('specializations', function (Blueprint $table) {
            $table->id('specialization_ID');
            $table->string('specialization_name');
            $table->timestamps();
        });

        Schema::create('vetSpecializations', function (Blueprint $table){
            $table->foreignId('user_id')->references('id')->on('vetLogin');
            $table->foreignId('specialization_ID')->references('specialization_ID')->on('specializations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specializations');
        Schema::dropIfExists('vetSpecializations');
    }
};
