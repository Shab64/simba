<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vikicar extends Model
{
    protected $fillable=['name','available','image','units','daily_start_price','category','from','to','characteristics','details','category'];
}
