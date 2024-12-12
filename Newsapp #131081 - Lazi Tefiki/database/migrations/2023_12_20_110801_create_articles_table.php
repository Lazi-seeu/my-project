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
        Schema::create('articles', function (Blueprint $table) {
            $table->integer('newsid')->unique()->nullable(false);
            $table->string('headline',150)->nullable(false);
            $table->mediumtext('articletext')->nullable(false);
            $table->string('author',30)->nullable(false);
            $table->boolean('isactive')->nullable(false);
            $table->date('datecreated')->nullable(false);
            $table->integer('priority')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
