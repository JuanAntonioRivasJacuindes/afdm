<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAsBuyIntentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_as_buy_intents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buy_intent_id')->constrained('buy_intents');
            $table->foreignId('plan_id')->constrained('plans');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('product_as_buy_intents');
    }
}
