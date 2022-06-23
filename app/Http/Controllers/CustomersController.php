<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer['all_customers']=Customers::orderBy('id','DESC')->get();
        return view('admin.view-all-customer',$customer);
    }

    function view($page,$id){
        $customer['customer_details']=Customers::where('id',$id)->get();
        return view('admin.'.$page,$customer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.add-customers');
    }


    function getCustomerForReservation(Request $request){
        $data['all_customers'] = json_decode(Customers::orderBy('id','DESC')->get(),true);
        if (!empty($data['all_customers'])){?>
            <select name="customer" class="form-control">
            <?php foreach ($data['all_customers'] as $c){ ?>
                <option value="<?=$c['id']?>"><?=$c['name']?></option>
            <?php } ?>
            </select>
         <?php }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$post_type = null)
    {
        $ifValidated = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:customers,email',
            'phone'=>'required',
            'state'=>'required',
            'country'=>'required',
            'city'=>'required',
            'street'=>'required',
            'zip'=>'required',
            'type'=>'required',
            'branch'=>'required',
            'id_card'=>'required',
            'dl_image'=>'required_if:type,Rental',
            'expiration_date'=>'required_if:type,Rental',
            'd_license_no'=>'required_if:type,Rental',
        ]);
        if ($ifValidated){
            //storing dl images
            $request->file('dl_image')->storeAs('public/uploads',$request->file('dl_image')->getClientOriginalName());
            $ifValidated['dl_image'] = $request->file('dl_image')->getClientOriginalName();

            //storing id card
            $request->file('id_card')->storeAs('public/uploads',$request->file('id_card')->getClientOriginalName());
            $ifValidated['id_card'] = $request->file('id_card')->getClientOriginalName();

            Customers::create($ifValidated);
            if ($post_type === 'reservation_quick_customer'){
                return 200;
            }else{
                return redirect('admin/customers')->with('success','New Customer Added');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers,$id)
    {
        $data = Customers::find($id);
        $data->delete();
        return back();

    }
}
