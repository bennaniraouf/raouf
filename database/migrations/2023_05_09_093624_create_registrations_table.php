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
            
            $table->increments('id');
            $table->string('familyname');
            $table->string('lastname');
            $table->string('adress');
            $table->string('age');
            $table->string('phonenumber');
            $table->string('gender');
            $table->string('email');
            $table->string('password');
            $table->string('bloodtype');
            $table->string('Rh');
            $table->string('disease');
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
