<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('permission_names', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('product_id')->nullable()->default(null)->constrained('products');
        //     $table->string('permission_name');
        //     $table->foreignId('permission_id')->nullable()->default(null)->constrained('permissions');

        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_names');
    }
}
