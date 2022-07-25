<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubjectHasDates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_has_dates', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default(null);
            $table->foreignId('date_id')->nullable()->default(null)->constrained('dates');
            $table->foreignId('diploma_id')->nullable()->default(null)->constrained('diplomas');
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
        Schema::dropIfExists('subject_has_dates');
    }
}
