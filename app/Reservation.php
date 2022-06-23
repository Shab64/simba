<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['p_date','branch', 'r_date', 'p_location', 'r_location', 'p_time', 'r_time', 'shab_car', 'silver_cover', 'gold_cover', 'additional_driver', 'child_seat', 'boost_seat', 'payment_method', 'total_amount', 'comments', 'agreement', 'image','customer',
        'card_number','expiry_date','cvn','bsb','account_no','kms_out','kms_driver','kms_in','kms_allowed','excess_kms','extension','airport','damage','sig_date_starting','print_name','sig_date_ending','term_condition','paid_amount','remaining_amount','fleet_car','hirer_sig','owner_sig','third_sig','type','reservation_type','total_days'
    ];
}
