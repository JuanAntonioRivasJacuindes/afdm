<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->nullable()->default(null);
            $table->foreignId('inscription_id')->nullable()->default(null)->constrained('inscriptions');
            $table->foreignId('advisor_id')->nullable()->default(null)->constrained('users');
            $table->string('voucher')->nullable()->default(null);
            $table->foreignId('status_id')->nullable()->default(null)->constrained('statuses');
            $table->timestamp('expires_at')->nullable()->default(null);
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
        Schema::dropIfExists('monthly_payments');
    }
}
