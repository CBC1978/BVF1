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
    Schema::create('contract', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('freight_announcement_id');
        $table->unsignedBigInteger('transport_offer_id');
        $table->timestamp('agreement_date')->nullable();
        $table->timestamps();

        $table->foreign('freight_announcement_id')->references('id')->on('freight_announcement')->onDelete('cascade');

        $table->foreign('transport_offer_id')->references('id')->on('transport_offer')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat');
    }
};
