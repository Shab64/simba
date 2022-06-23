<?php

namespace App\Http\Controllers;

use App\Vikicar;
use App\VikiFearPrice;
use Illuminate\Http\Request;

class VikiFearPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['car_id']=json_decode(Vikicar::take(1)->first(),true);
        if (!empty($data['car_id'])){
            $daily_price = json_decode(VikiFearPrice::where('viki_car_id',$data['car_id']['id'])->get(),true);
            if (!empty($daily_price)){
                $data['car_id']['daily_price']= $daily_price;
            }
        }
        $data['all_Vikicars']=Vikicar::all();
        return view('admin.edit-view-fares',$data);
    }

    public function update_daily_price(Request $request){
        unset($request['_token']);
        $check = json_decode(VikiFearPrice::where('viki_car_id',$request->viki_car_id)->get(),true);
        if (empty($check)){
            VikiFearPrice::create($request->all());
        }else{
            VikiFearPrice::where('viki_car_id',$request->viki_car_id)->update($request->all());
        }
        return back()->with('success','Daily price updated');
    }

    function getCar(Request $request){
        $data['car_id']=json_decode(Vikicar::where('id',$request->getcarDetials)->get(),true);
        if (!empty($data['car_id'])){
            $daily_price = json_decode(VikiFearPrice::where('viki_car_id',$data['car_id'][0]['id'])->get(),true);
            if (!empty($daily_price)){
                $data['car_id']['daily_price']= $daily_price;
            }
        }
        $data['all_Vikicars']=Vikicar::all();
        return view('admin.edit-view-fares',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VikiFearPrice  $VikiFearPrice
     * @return \Illuminate\Http\Response
     */
    public function show(VikiFearPrice $VikiFearPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VikiFearPrice  $VikiFearPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(VikiFearPrice $VikiFearPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VikiFearPrice  $VikiFearPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VikiFearPrice $VikiFearPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VikiFearPrice  $VikiFearPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(VikiFearPrice $VikiFearPrice)
    {
        //
    }
}
