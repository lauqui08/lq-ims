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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('atw');
            $table->foreignId('trucker_id')->constrained();
            $table->foreignId('buyer_id')->constrained();
            $table->string('plate_number');
            $table->integer('load_cap');
            $table->foreignId('tank_id')->constrained();
            $table->string('seal')->nullable();
            $table->string('dr')->unique();
            $table->foreignId('attachment_transaction_id')->nullable()->constrained('attachments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
