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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('illustrator_id')->nullable();
            $table->foreignId('author_id')->nullable();
            $table->string('title');
            $table->string('language');
            $table->string('type');
            $table->string('thumbnail')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('stories');
        Schema::dropIfExists('story');
    }
};
