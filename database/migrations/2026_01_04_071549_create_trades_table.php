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
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('coin_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['buy', 'sell']);
            $table->decimal('amount', 20, 0);
            $table->decimal('margin', 20, 0)->nullable();
            $table->decimal('leverage', 5, 2)->default(1);
            $table->decimal('price', 15, 0);
            $table->datetime('date_opened');
            $table->decimal('close_price', 15, 0)->nullable();
            $table->datetime('date_closed')->nullable();    
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->decimal('profit_loss', 20, 0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trades');
    }
};
