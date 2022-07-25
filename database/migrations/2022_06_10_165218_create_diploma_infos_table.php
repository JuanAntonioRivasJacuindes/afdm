<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomaInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diploma_infos', function (Blueprint $table) {
            $table->id();
            $table->text('introduction')->nullable()->default(null);
            $table->text('objectives')->nullable()->default(null);
            $table->text('target')->nullable()->default(null);
            $table->text('skills')->nullable()->default(null);
            $table->text('contact')->nullable()->default(null);
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
        Schema::dropIfExists('diploma_infos');
    }
}
