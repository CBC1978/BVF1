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
        Schema::create('freight_offer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_transport_announcement_id');
            $table->unsignedBigInteger('fk_shipper_id');
            $table->float('price');
            $table->float('weight');
            $table->text('description');
            $table->string('statut');
            $table->foreign('fk_transport_announcement_id')->references('id')->on('transport_announcement')->onDelete('cascade');
            $table->foreign('fk_shipper_id')->references('id')->on('shipper')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freight_offer');
    }
};
