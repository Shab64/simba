<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable=['name', 'email', 'city' , 'phone', 'state', 'country', 'street', 'zip', 'type', 'branch', 'dl_image', 'expiration_date', 'd_license_no','id_card'];
}
