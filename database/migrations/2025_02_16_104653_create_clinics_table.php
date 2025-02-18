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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id('clinic_ID');
            $table->string('clinic_name');
            $table->string('clinic_description');
            $table->string('clinic_profilePicture');
            $table->foreignId('adress_ID')->references('adress_ID')->on('adresses');
            $table->timestamps();
        });

        Schema::create('clinicsVet', function (Blueprint $table) {
            $table->foreignId('clinic_ID')->references('clinic_ID')->on('clinics');
            $table->foreignId('vet_ID')->references('id')->on('vetLogin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};
