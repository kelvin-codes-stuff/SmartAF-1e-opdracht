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
        Schema::create('file_handles', function (Blueprint $table) {
            $table->string('file_name');
            $table->string('file_piority');
            $table->string('file_description');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
            $table->id()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_handles');
    }
};
