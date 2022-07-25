<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('advisor_id')->nullable()->default(null)->constrained('users');
            $table->foreignId('status_id')->nullable()->default(null)->constrained('statuses');
            $table->string('voucher')->nullable()->default(null);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
