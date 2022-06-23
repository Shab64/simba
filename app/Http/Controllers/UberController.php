<?php

namespace App\Http\Controllers;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uber['all_ubers']=Vehicle::where('category','uber')->get();
        return view('admin.uber-view-all',$uber);
    }

    function view($page,$id =null){
        if (!empty($id)){
            $vehicle['vehicle_details']=Vehicle::where('id',$id)->get();
            return view('admin.'.$page,$vehicle);
        }
        $vehicle['lender_finance'] = DB::table('vehicles')->select('vehicles.leader_finance',DB::raw('count(*) as total_no_of_cars'),DB::raw('SUM(monthly_repayment) as total_repayment'))->groupBy('leader_finance')->get();
        $vehicle['all_vehicles']=Vehicle::where('category','uber')->get();
        return view('admin.'.$page,$vehicle);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
