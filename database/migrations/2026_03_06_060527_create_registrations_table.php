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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->enum('gender', ['Male', 'Female']);
            $table->enum('status', ['Pending', 'Completed'])->default('Pending');
            // $table->string('class');
            // $table->string('parents_name');
            // $table->integer('height');
            // $table->integer('weight');
            // $table->string('birth_date');
            // $table->string('social_media');
            // $table->string('phone');
            // $table->string('hobby');
            $table->string('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
