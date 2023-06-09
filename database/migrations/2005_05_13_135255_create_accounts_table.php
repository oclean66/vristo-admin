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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->nullable();
            $table->string('code', 45)->unique();
            $table->string('title', 45)->nullable();
            $table->string('subtitle', 45)->nullable();
            $table->string('country', 3)->nullable();
            $table->string('email', 45);
            $table->string('document', 45)->nullable();
            $table->string('address', 45)->nullable();
            $table->string('fullname', 45)->nullable();
            $table->tinyInteger('state');
            $table->string('phone', 45)->nullable();
            $table->string('mobile', 45)->nullable();
            $table->timestamps(); // created_at/updated_at
            $table->timestamp('deleted_at')->nullable();
            $table->string('accountType', 5)->nullable();
            $table->string('balanceType', 5)->nullable();
            $table->tinyInteger('emailState')->nullable();
            $table->tinyInteger('phoneState')->nullable();
            $table->string('reference', 45)->nullable();
            $table->foreignId('currencies_id');
            $table->foreign('currencies_id')->references('id')->on('currencies')->onDelete('cascade'); //? what should do on delete?
            $table->foreignId('levels_id');
            $table->foreign('levels_id')->references('id')->on('levels')->onDelete('cascade'); //? what should do on delete?
            $table->foreignId('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
