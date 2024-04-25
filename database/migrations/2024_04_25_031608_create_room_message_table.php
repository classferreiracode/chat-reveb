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
        Schema::disableForeignKeyConstraints();

        Schema::create('room_message', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->bigInteger('message_id');
            $table->foreign('message_id')->references('id')->on('messeges');
            $table->bigInteger('from_id');
            $table->foreign('from_id')->references('id')->on('users');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_message');
    }
};
