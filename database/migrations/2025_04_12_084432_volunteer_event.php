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
        Schema::create('volunteer_event', function (Blueprint $table) {
            $table->id();
            $table->foreign('event_id')->references('event_id')->on('notifications')->onDelete('cascade');
            $table->foreign('volunteer_id')->references('volunteer_id')->on('volunteers')->onDelete('cascade');
            $table->string('status');
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
