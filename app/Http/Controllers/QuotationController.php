<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Quotation;
use App\Reservation;
use App\Vikicar;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_quotations=Reservation::all();
        return view('admin.quotation',compact('all_quotations'));
    }

    function view($page,$id =null){
        if (!empty($id)){
            $quotation['all_reservations']=json_decode(Reservation::where('id',$id)->get(),true);
            return view('admin.'.$page,$quotation);
        }
//        $quotation['all_quotations']=json_decode(Quotation::all(),true);
        $quotation['all_reservations']=json_decode(Reservation::where('type','quote_only')->orderBy('id','DESC')->get(),true);
        if (!empty($quotation['all_reservations'])){
            foreach ($quotation['all_reservations'] as $k=>$r){
                $c = json_decode(Customers::where('id',$r['customer'])->get(),true);
                if (!empty($c)){
                    $quotation['all_reservations'][$k]['customer_details'] = $c;
                }
                $car = json_decode(Vikicar::where('id',$r['shab_car'])->get(),true);
                if (!empty($car)){
                    $quotation['all_reservations'][$k]['car_details'] = $car;
                }
            }
        }

        return view('admin.'.$page,$quotation);
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
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotation $quotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
        //
    }
}
