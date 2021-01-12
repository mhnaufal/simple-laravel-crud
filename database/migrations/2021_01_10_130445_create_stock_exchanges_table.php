<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_exchanges', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('buy')->default(10000);
            $table->integer('sell')->default(12000);
            $table->integer('lot'); //AVAILABLE LOTS
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
        Schema::dropIfExists('stock_exchanges');
    }
}
