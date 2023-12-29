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
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('coursename')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('address')->nullable();
            $table->string('user_type')->default('user')->nullable();
            $table->string('gender')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            

            
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
