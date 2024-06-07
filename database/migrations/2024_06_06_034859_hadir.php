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
        Schema::create('hadirs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->time('jam_datang');
            $table->time('jam_pulang')->nullable();
            $table->string('insentive');
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
