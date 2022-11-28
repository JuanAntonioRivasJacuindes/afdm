<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdBfgiftcoursesColumnsToInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inscriptions', function (Blueprint $table) {
            //
            $table->foreignId('id_bfgiftcourses')
            ->after('status_id')
            ->nullable()
            ->default(null)
            ->constrained('buenfin_giftcourses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inscriptions', function (Blueprint $table) {
            //
            $table->dropColumn('id_bfgiftcourses');
        });
    }
}
