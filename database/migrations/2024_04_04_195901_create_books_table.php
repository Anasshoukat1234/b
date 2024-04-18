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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            // $table->decimal('price', 15, 2)->default(0.00);

            // $table->string('image');


            $table->string('image')->nullable();

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('author_id');
            $table->string('content');
            $table->unsignedBigInteger('rating');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('author_id')->references('id')->on('authors');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
