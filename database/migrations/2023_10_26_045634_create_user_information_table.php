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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('mobile_no');
            $table->string('address');
            $table->foreignId('user_id')->constraind()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
