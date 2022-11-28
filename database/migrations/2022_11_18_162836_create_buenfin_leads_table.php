<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuenfinLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buenfin_leads', function (Blueprint $table) {
            $table->id();
            $table->string('diplomado');
            $table->string('fullnamelead');
            $table->string('email');
            $table->string('numberlead');
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
        Schema::dropIfExists('buenfin_leads');
    }
}
