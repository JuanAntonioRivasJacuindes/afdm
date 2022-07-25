<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomas', function (Blueprint $table) {
            $table->id();
            $table->String('title',100);
            $table->text('description');
            $table->String('flyer',100)->nullable()->default(null);
            $table->String('poster',100)->nullable()->default(null);
            $table->String('stripe_id',100)->nullable()->default(null);
            $table->foreignId('status_id')->constrained('statuses');
            $table->foreignId('date_id')->nullable()->default(null)->constrained('dates');
            $table->foreignId('product_id')->nullable()->default(null)->constrained('products');
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
        Schema::dropIfExists('diplomas');
    }
}
