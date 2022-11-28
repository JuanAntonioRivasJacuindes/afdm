<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuenfinGiftcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buenfin_giftcourses', function (Blueprint $table) {
            $table->id();
            $table->String('title',100);
            $table->text('description');
            $table->text('link_iframe');
            $table->String('flyer',100)->nullable()->default(null);
            $table->String('poster',100)->nullable()->default(null);
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
        Schema::dropIfExists('buenfin_giftcourses');
    }
}
