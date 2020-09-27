<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Get data from database
        $houses = House::orderBy('created_at')->paginate(6);

        return view('admin.all-houses', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-house');
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
                'house_name'=>'required',
                'county'=>'required',
                'street'=>'required',
                'section'=>'required',
                'details'=>'required',
                'plot_number'=>'required',
                'land_reference'=>'required'
            ]
        );

        //Initialize new object
        $house = new House;

        //Assign Request values to database fields
        $house->name = $request->get('house_name');
        $house->county = $request->get('county');
        $house->street = $request->get('street');
        $house->section = $request->get('section');
        $house->details = $request->get('details');
        $house->plot_number = $request->get('plot_number');
        $house->land_reference = $request->get('land_reference');

        //Save request data
        $house->save();

        //Redirect to view all page
        return redirect()->route('all-houses')->with('success', 'Record Successfully Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house = House::find($id);

        return view('admin.single-house', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $house = House::find($id);
        return view('admin.edit-house', compact('house'));
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
        //Find relevant record to be updated
        $house = House::find($id);

        //Perform Validations
        $this->validate(
            $request,
            [
                'house_name'=>'required',
                'county'=>'required',
                'street'=>'required',
                'section'=>'required',
                'details'=>'required',
                'plot_number'=>'required',
                'land_reference'=>'required'
            ]
        );

        //Assign Request values to database fields
        $house->name = $request->get('house_name');
        $house->county = $request->get('county');
        $house->street = $request->get('street');
        $house->section = $request->get('section');
        $house->details = $request->get('details');
        $house->plot_number = $request->get('plot_number');
        $house->land_reference = $request->get('land_reference');

        //Save request data
        $house->save();

        //Redirect to view all page
        return redirect()->route('all-houses')->with('success', 'Record Successfully Updated!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $house = House::find($id);
        $house->delete();

        return redirect()->route('all-houses')->with('success', 'Record Successfully Deleted!');
    }

    public function delete($id)
    {
        $house = House::find($id);

        return view('admin.delete-house', compact('house'));
    }
}
