<?php

namespace App\Http\Controllers;

use App\House;
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
        $houses = House::orderBy('create_at')->pagination(6);

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
                'name'=>'required',
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
        $house->name = $request->get('name');
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
