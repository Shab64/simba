<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_vehicles=Vehicle::all();
        return view('admin.viewAllVehicles',compact('all_vehicles'));
    }


    function view($page,$id =null){
        if (!empty($id)){
            $vehicle['vehicle_details']=Vehicle::where('id',$id)->get();
            return view('admin.'.$page,$vehicle);
        }
        $vehicle['lender_finance'] = DB::table('vehicles')->select('vehicles.leader_finance',DB::raw('count(*) as total_no_of_cars'),DB::raw('SUM(monthly_repayment) as total_repayment'))->groupBy('leader_finance')->get();
        $vehicle['all_vehicles']=Vehicle::all();
         return view('admin.'.$page,$vehicle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_drivers=Driver::all();
        return view('admin.addVehicle',compact('all_drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ifValidated = $request->validate([
            'reg_number'=>'required',
            'reg_date'=>'required|unique:customers,email',
            'reg_end_date'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'type'=>'required',
            'color'=>'required',
            'year'=>'required',
            'branch'=>'required',
            'win_no'=>'required',
            'engine_no'=>'required',
            'finance'=>'required',
            'category'=>'required',
            'purchase_date'=>'required',
            'purchase_price'=>'required',
            'monthly_repayment'=>'required',
            'leader_finance'=>'required',
            'transmission'=>'required',
            'maintenance_date'=>'required',
            'start_insurance_date'=>'required',
            'end_insurance_date'=>'required',
            'insurance_doc'=>'required',
            'driver'=>'required_if:category,Uber',
        ]);
        if ($ifValidated){
            $request->file('insurance_doc')->storeAs('public/uploads',$request->file('insurance_doc')->getClientOriginalName());
            $ifValidated['insurance_doc'] = $request->file('insurance_doc')->getClientOriginalName();
            //profile
            $request->file('image')->storeAs('public/uploads',$request->file('image')->getClientOriginalName());
            $ifValidated['image'] = $request->file('image')->getClientOriginalName();
            Vehicle::create($ifValidated);
            return redirect('admin/vehicles')->with('success','New Vehicle Added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle,$id)
    {
        $data =Vehicle::find($id);
        $data->delete();
        return back();

    }
}
