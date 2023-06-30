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
        Schema::create('shipper', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user_id');
            $table->string('company_name');
            $table->string('address');
            $table->string('phone');
            $table->timestamp('created_at')->nullable();
            $table->timestamps();
    
            
            $table->foreign('fk_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipper');
    }
};
