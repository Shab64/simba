<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable=['reg_number','year','branch','reg_date','reg_end_date','brand','model','type','color','win_no','engine_no','finance','category','purchase_date','purchase_price','monthly_repayment','leader_finance','transmission','maintenance_date','start_insurance_date','end_insurance_date','insurance_doc','driver','image'];
}
