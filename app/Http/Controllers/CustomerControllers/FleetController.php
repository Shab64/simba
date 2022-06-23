<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Http\Controllers\Controller;
use App\Vikicar;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class FleetController extends Controller
{
    function index(){
        $data['our_fleet'] = json_decode(Vikicar::all(),true);
        return view('users.our-fleet',$data);
    }
    function single_detail_page($id){
        $data['car_details'] = json_decode(Vikicar::where('id',$id)->get(),true);
        return view('users.car-detail',$data);
    }
}
