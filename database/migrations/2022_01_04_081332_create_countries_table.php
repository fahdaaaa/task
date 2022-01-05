<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->char('iso3', 3);
            $table->char('numeric_code', 3);
            $table->char('iso2', 2);
            $table->string('phonecode', 255);
            $table->string('capital', 255);
            $table->string('currency', 255);
            $table->string('currency_name', 255);
            $table->string('currency_symbol', 255);
            $table->string('tld', 255);
            $table->string('native', 255);
            $table->string('region', 255);
            $table->string('subregion', 255);
            $table->text('timezones');
            $table->text('translations');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->string('emoji', 191);
            $table->string('emojiU', 191);
            $table->tinyInteger('flag')->default('1');
            $table->string('wikiDataId', 255);
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
        Schema::dropIfExists('countries');
    }
}
