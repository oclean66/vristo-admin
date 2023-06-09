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
            $table->string('username', 45)->unique()->nullable();
            $table->string('name', 45);
            $table->string('email', 45)->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->text('two_factor_secret');                          //? jetstream implement your own recovery codes
            // $table->text('two_factor_recovery_codes')->nullable();      //?
            // $table->timestamp('two_factor_confirmed_at')->nullable();   //? jetstream use your own two factor confirmed
            $table->string('password', 255);
            $table->rememberToken(); // VARCHAR(100)
            $table->tinyInteger('state')->nullable();
            $table->string('phone', 45)->unique()->nullable();
            $table->string('mobile', 45)->unique()->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps(); // created_at/updated_at
            $table->foreignId('accounts_id')->nullable();
            $table->foreign('accounts_id')->references('id')->on('accounts')->onDelete('cascade'); //? what should do on delete
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
