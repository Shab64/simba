<?php

namespace App\Http\Controllers;

use App\Vikirental_location;
use App\Vikirental_priceType;
use App\Vikirental_tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VikiRentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_tax']=Vikirental_tax::all();
        $data['all_location']=Vikirental_location::all();
        $data['all_price']=DB::table('vikirental_price_types')
            ->join('vikirental_taxes','vikirental_price_types.tax_id','=','vikirental_taxes.id')
            ->select('vikirental_price_types.*','vikirental_taxes.tax_rate')
            ->get();
        return view('admin.rentalCms',$data);
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
    public function store(Request $request,$type)
    {
        if ($type === 'tax'){
            $validated = $request->validate([
                'tax_name'=>'required',
                'tax_rate'=>'required',
                ]);
            Vikirental_tax::create($validated);
            return redirect('/admin/vikirental')->with('success','Tax added successfully');
        }elseif ($type  === 'price'){
            $validated = $request->validate([
                'name'=>'required',
                'attributes'=>'required',
                'tax_id'=>'required',
            ]);
            Vikirental_priceType::create($validated);
            return redirect('/admin/vikirental')->with('success','Price added successfully');
        }elseif ($type  === 'location'){
            $validated = $request->validate([
                'name'=>'required',
                'address'=>'required',
                'from'=>'required',
                'to'=>'required',
            ]);
            Vikirental_location::create($validated);
            return redirect('/admin/vikirental')->with('success','Location added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VikiRental  $vikiRental
     * @return \Illuminate\Http\Response
     */
    public function show(VikiRental $vikiRental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VikiRental  $vikiRental
     * @return \Illuminate\Http\Response
     */
    public function edit(VikiRental $vikiRental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VikiRental  $vikiRental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VikiRental $vikiRental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VikiRental  $vikiRental
     * @return \Illuminate\Http\Response
     */
    public function destroy(VikiRental $vikiRental)
    {
        //
    }
}
