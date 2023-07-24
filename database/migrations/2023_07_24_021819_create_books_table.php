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
            $table->foreignId('book_type_id')->constrained('books_type'); //relation with books_type table id
            $table->foreignId('publisher_id')->constrained('publishers'); //relation with publishers table id
            $table->string('title');
            $table->unsignedInteger('no_pages');
            $table->unsignedInteger('publishing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
