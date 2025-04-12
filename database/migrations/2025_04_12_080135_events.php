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
        //
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('event_id')->primary();
            $table->foreign('organization_id')->references('organization_id')->on('organizations')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('location');
            $table->integer('min_quantity');
            $table->integer('max_quantity');
            $table->integer('quantity_now');
            $table->string('status')->default('active');
            $table->string('approved')->default('public');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
