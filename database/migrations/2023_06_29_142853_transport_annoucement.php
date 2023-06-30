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
        Schema::create('transport_annoucement', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_carrier_id');
            $table->string('origin');
            $table->string('destination');
            $table->timestamp('limit_date');
            $table->string('vehicule_type');
            $table->float('weight');
            $table->text('description');
            $table->foreign('fk_carrier_id')->references('id')->on('carrier')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_annoucement');
    }
};
