<?php

namespace App\Http\Controllers;

use App\Vikicar;
use App\Vikicar_categories;
use App\Vikicar_characteristics;
use App\Vikirental_location;
use Illuminate\Http\Request;

class VikicarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_characteristics']=Vikicar_characteristics::all();
        $data['all_categories']=Vikicar_categories::all();
        $data['all_Vikicars']=Vikicar::all();
        return view('admin.carsCms',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['all_categories']=Vikicar_categories::all();
        $data['all_characteristics']=Vikicar_characteristics::all();
        $data['all_locations']=Vikirental_location::all();
        return view('admin.add-carsListCms',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$type)
    {
        if ($type === 'category'){
            $validated = $request->validate([
                'name'=>'required',
                'details'=>'required',
            ]);
            Vikicar_categories::create($validated);
            return redirect('/admin/Vikicar')->with('success','Category added successfully');
        }elseif ($type  === 'characteristics'){
            $validated = $request->validate([
                'name'=>'required',
                'text'=>'required',
                'viki_cars_assigned'=>'required',
            ]);
            $validated['viki_cars_assigned'] = json_encode($validated['viki_cars_assigned']);
            Vikicar_characteristics::create($validated);
            return redirect('/admin/Vikicar')->with('success','characteristics added successfully');
        }elseif ($type  === 'carlist'){
            $validated = $request->validate([
                'name'=>'required',
                'available'=>'required',
                'image'=>'required',
                'daily_start_price'=>'required',
                'units'=>'required',
//                'category'=>'required',
//                'characteristics'=>'required',
                'from'=>'required',
                'to'=>'required',
                'details'=>'required',
            ]);
            if (isset($request->characteristics)){
                $char = json_encode($request->characteristics);
                $validated['characteristics'] = $char;
            }if (isset($request->category)){
                $cat = json_encode($request->category);
                $validated['category'] = $cat;
            }


            //storing profiles
            $request->file('image')->storeAs('public/carlist',$request->file('image')->getClientOriginalName());
            $validated['image'] = $request->file('image')->getClientOriginalName();
            Vikicar::create($validated);
            return redirect('/admin/Vikicar')->with('success','Car list added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vikicar  $Vikicar
     * @return \Illuminate\Http\Response
     */
    public function show(Vikicar $Vikicar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vikicar  $Vikicar
     * @return \Illuminate\Http\Response
     */
    public function edit(Vikicar $Vikicar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vikicar  $Vikicar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vikicar $Vikicar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vikicar  $Vikicar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vikicar $Vikicar)
    {
        //
    }
}
