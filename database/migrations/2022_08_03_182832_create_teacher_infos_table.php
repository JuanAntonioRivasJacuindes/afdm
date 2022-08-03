<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('teacher_infos', function (Blueprint $table) {
            $table->id();
            $table->text('full_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('rfc');
            $table->string('education');
            $table->string('ocupation');
            $table->string('bank');
            $table->string('account_number');
            $table->string('clabe');
            $table->string('terms')->nullable()->default(null);
            $table->text('synthesis');
            $table->text('dni')->nullable()->default(null);
            $table->string('cedula')->nullable()->default(null);
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
        Schema::dropIfExists('teacher_infos');
    }
}
