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
        Schema::create('entities', function (Blueprint $table){
            $table->id('entity_ID');
            $table->integer('entity_type');
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_ID');
            $table->foreignId('entity_ID')->references('entity_ID')->on('entities');
            $table->integer('comment_targetID');
            $table->integer('comment_rate');
            $table->string('comment_description');
            $table->string('comment_creator');
            $table->string('comment_creatorEmail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
