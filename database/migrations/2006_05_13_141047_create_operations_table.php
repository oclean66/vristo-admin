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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('control', 45)->nullable();
            $table->integer('parent_id')->nullable();
            $table->decimal('balance', 10, 2)->nullable();
            $table->foreignId('accounts_id');
            $table->foreign('accounts_id')->references('id')->on('accounts')->onDelete('cascade'); //? what should do on delete
            $table->foreignId('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_method')->onDelete('cascade'); //? what should do on delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
