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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            
            $table->string('firstname');  // First name
            
            $table->string('lastname');   // Last name
            
            $table->string('email')->nullable(); // Email address
            
            $table->string('phone')->nullable(); // Phone number

          
            $table->timestamps();
            
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};