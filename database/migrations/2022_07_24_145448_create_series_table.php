<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('trailer_url');
            $table->string('trailer_thumbnail_url')->default('');
            $table->string('logo_url')->default('');
            $table->string('cover_url');
            $table->string('synopsis', 1000);
            $table->string('cast', 1000);
            $table->string('gender', 25)->default('');
            $table->string('coincidence');
            $table->string('rating', 4);
            $table->string('year', 6);
            $table->string('resolution', 4);
            $table->string('state', 1)->default('A');
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
        Schema::dropIfExists('series');
    }
}
