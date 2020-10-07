<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Room::all();
        return view('admin.create-tenant', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Perform Validations
        $this->validate(
            $request,
            [
                'email'=>'required',
                'details'=>'required',
                'contract'=>'required',
                'id_number'=>'required',
                'last_name'=>'required',
                'first_name'=>'required',
                'middle_name'=>'required',
                'phone_number'=>'required',
                'rent_payable_on'=>'required',
                'tenancy_begins_on'=>'required',
                'id_scan'=>'image|nullable|max:1999',
                'passport_picture'=>'image|nullable|max:1999'
            ]
        );

        //Handle Image Upload
        if($request->hasFile('id_scan')){
            //Get file name with extension
            $id_scan_nameWithExtension = $request->file('id_scan')->getClientOriginalName();

            //Get file name witout extension
            $id_scan_filename = pathinfo($id_scan_nameWithExtension, PATHINFO_FILENAME);

            //get extension
            $id_scan_extension = $request->file('id_scan')->getClientOriginalExtension();

            //Create a eunique filename to store
            $id_scan_nameToStore = time().'-id-scan'.'.'.$id_scan_extension;

            //Upload feature image
            $id_scan_path = $request->file('id_scan')->storeAs('public/img/id_scan', $id_scan_nameToStore); 
        }

        //Handle File Upload
        if($request->hasFile('contract')){
            //Get file name with extension
            $contract_nameWithExtension = $request->file('contract')->getClientOriginalName();

            //Get file name witout extension
            $contract_filename = pathinfo($contract_nameWithExtension, PATHINFO_FILENAME);

            //get extension
            $contract_extension = $request->file('contract')->getClientOriginalExtension();

            //Create a eunique filename to store
            $contract_nameToStore = time().'-contract'.'.'.$id_scan_extension;

            //Upload feature image
            $contract_path = $request->file('contract')->storeAs('public/img/contract', $contract_nameToStore); 
        }

        //Handle Image Upload
        if($request->hasFile('passport_picture')){
            //Get file name with extension
            $passport_picture_nameWithExtension = $request->file('passport_picture')->getClientOriginalName();

            //Get file name witout extension
            $passport_picture_filename = pathinfo($passport_picture_nameWithExtension, PATHINFO_FILENAME);

            //get extension
            $passport_picture_extension = $request->file('passport_picture')->getClientOriginalExtension();

            //Create a eunique filename to store
            $passport_picture_nameToStore = time().'-passport-picture'.'.'.$id_scan_extension;

            //Upload feature image
            $passport_picture_path = $request->file('passport_picture')->storeAs('public/img/passport_picture', $passport_picture_nameToStore); 
        }

        //initialize new object
        $data = new Tenant;

        //Data
        $data->email = $request->get('email');
        $data->details = $request->get('details');
        $data->id_number = $request->get('id_number');
        $data->last_name = $request->get('last_name');
        $data->first_name = $request->get('first_name');
        $data->middle_name = $request->get('middle_name');
        $data->phone_number = $request->get('phone_number');
        
        //Files        
        $data->id_scan = $id_scan_nameToStore;
        $data->contract = $contract_nameToStore;
        $data->passport_picture = $passport_picture_nameToStore;

        //Dates
        //$data->rent_payable_on = $request->get('rent_payable_on');
        //$data->tenancy_begins_on = $request->get('tenancy_begins_on');

        //Save data
        $data->save();

        //Redirect
        return redirect()->route('all-tenants')->with('success', 'Record Successfully Saved!');

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

