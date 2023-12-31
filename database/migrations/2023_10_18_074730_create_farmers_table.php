<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *   
     */
    public function up(): void
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id('farmer_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->enum('gender',["M","F","O"]);
            $table->date('dob');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
