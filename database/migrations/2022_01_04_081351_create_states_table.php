<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->integer('country_id')->unsigned();
            $table->char('country_code', 2);
            $table->string('fips_code', 255);
            $table->string('iso2', 255);
            $table->string('type', 191);
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->tinyInteger('flag')->default('1');
            $table->string('wikiDataId', 255);
            $table->timestamps();
            $table->index(["country_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
