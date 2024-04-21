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
        Schema::create('supervisor', function (Blueprint $table) {
            $table->id();
          $table->string('name');
        $table->string('designation'); // Changed column name to lowercase
        $table->integer('total_slots'); // Changed column name to lowercase
        $table->integer('available_slots');
         $table->string('Status');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisor');
    }
};
