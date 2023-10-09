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
        Schema::create('films', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('id_tmdb'); 
            $table->string('title'); // Movie title
            $table->text('synopsis'); // Movie synopsis
            $table->string('picture'); // Picture URL (assuming varchar for file path)
            $table->unsignedBigInteger('genre_id'); // Foreign key to genre table
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }
 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
