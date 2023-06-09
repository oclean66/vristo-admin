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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('username', 45)->unique();
            $table->string('password', 45);
            $table->tinyInteger('state')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('email', 45)->unique();
            $table->string('phone', 45)->unique()->nullable();
            $table->string('mobile', 45)->unique()->nullable();
            $table->tinyInteger('numbers')->nullable();
            $table->foreignId('accounts_id');
            $table->foreign('accounts_id')->references('id')->on('accounts')->onDelete('cascade'); //? what should do on delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
