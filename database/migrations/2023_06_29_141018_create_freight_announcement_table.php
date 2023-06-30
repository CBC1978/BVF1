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
    Schema::create('freight_announcement', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('shipper_id');
        $table->string('origin');
        $table->string('destination');
        $table->timestamp('limit_date');
        $table->decimal('weight', 8, 2);
        $table->decimal('volume', 8, 2);
        $table->text('description');
        $table->timestamps();

        
        $table->foreign('shipper_id')->references('id')->on('shipper')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freight_announcement');
    }
};
