<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoomLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoom_links', function (Blueprint $table) {
            $table->id();
            $table->text('link')->nullable()->default(null);
            $table->foreignId('diploma_id')->nullable()->default(null)->constrained('diplomas');
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
        Schema::dropIfExists('zoom_links');
    }
}
