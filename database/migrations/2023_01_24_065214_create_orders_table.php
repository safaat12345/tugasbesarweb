<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('qtyc')->nullable();
            $table->string('perqtyc')->nullable();
            $table->string('qtya')->nullable();
            $table->string('perqtya')->nullable();
            $table->string('qtyb')->nullable();
            $table->string('perqtyb')->nullable();
            $table->foreignId('coffes_id');
            $table->foreignId('blands_id');
            $table->foreignId('bvrages_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
