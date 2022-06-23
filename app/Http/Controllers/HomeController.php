<?php

namespace App\Http\Controllers;

use App\AddtionalOptions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }


    function additionalOptions(Request $request,$type = 'edit'){
        if ($type === 'edit'){
            $data['additional_options']=json_decode(AddtionalOptions::all(),true);
            return view('admin.additional-option',$data);
        }elseif ($type === 'add'){
            unset($request['_token']);
            $check = json_decode(AddtionalOptions::all(),true);
            if (!empty($check)){
                AddtionalOptions::where('id',1)->update($request->all());
            }else{
                AddtionalOptions::create($request->all());
            }
            return redirect('admin/addition_options/edit');
        }


    }

}
