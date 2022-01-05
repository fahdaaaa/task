<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'iso3',
'numeric_code', 
'iso2' ,
'phonecode' ,
'capital' ,
'currency',
'currency_name',
'currency_symbol',
'tld' ,
'native' ,
'region' ,
'subregion' ,
'timezones',
'translations',
'latitude' ,
'longitude' ,
'emoji' ,
'emojiU' ,
'flag' ,
'wikiDataId',
    ];
}
