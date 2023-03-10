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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firts_name')->nullable();
            $table->string('second_name')->nullable();
            $table->integer('year')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
    
            //relaciones
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedBigInteger('civil_statuse_id')->nullable();
            $table->unsignedBigInteger('interest_level_id')->nullable();

            //foreign
            $table->foreign('gender_id')->references('id')->on('cat_genders');
            $table->foreign('civil_statuse_id')->references('id')->on('cat_civils');
            $table->foreign('interest_level_id')->references('id')->on('cat_levels');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
