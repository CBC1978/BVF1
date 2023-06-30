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
    Schema::create('transport_offer', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('freight_announcement_id');
        $table->unsignedBigInteger('carrier_id');
        $table->decimal('price', 8, 2);
        $table->string('status');
        $table->timestamps();

       
        $table->foreign('freight_announcement_id')->references('id')->on('freight_announcement')->onDelete('cascade');

        
        $table->foreign('carrier_id')->references('id')->on('carrier')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_offer');
    }
};