<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vikirental_location extends Model
{
    protected $fillable=['name','address','from','to'];
}
