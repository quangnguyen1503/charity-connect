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
        Schema::create('notification_volunteer', function (Blueprint $table) {
            $table->id();
            $table->foreign('notification_id')->references('notification_id')->on('notifications')->onDelete('cascade');
            $table->foreign('volunteer_id')->references('volunteer_id')->on('volunteers')->onDelete('cascade');
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
