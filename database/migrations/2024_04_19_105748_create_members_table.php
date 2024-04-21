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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('selection_id')->constrained('selections')->cascadeOnDelete();
            $table->string('group_member_1', 20)->nullable();
            $table->string('group_member_2', 20)->nullable();
            $table->string('group_member_3', 20)->nullable();

            $table->string('group_member_1_name', 20)->nullable();
            $table->string('group_member_2_name', 20)->nullable();
            $table->string('group_member_3_name', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
