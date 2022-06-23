<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class VikiFearPrice extends Model
{
    protected $fillable=['viki_car_id','daily_present_price','from','to','daily_update_price'];
}
