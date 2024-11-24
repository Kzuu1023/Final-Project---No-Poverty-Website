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
        Schema::create('donation_users', function (Blueprint $table) {
            $table->increments('id'); // Auto-incrementing primary key
            $table->string('fullname');
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->decimal('donation_amount', 10, 2); // Precise donation amount
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('donation_users');
    }
};
