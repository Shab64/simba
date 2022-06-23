<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Http\Controllers\Controller;
use App\Vikirental_location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data['all_locations'] = json_decode(Vikirental_location::all(),true);
        return view('users.index',$data);
    }


}
