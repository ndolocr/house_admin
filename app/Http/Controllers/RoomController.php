<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\House;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('created_at')->paginate(6);

        return view('admin.all-rooms', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $house = House::all();
        return view('admin.create-room', compact('house'));
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
                'status'=>'required',
                'details'=>'required',
                'house_id'=>'required',
                'room_name'=>'required'
            ]
        );

        //Initialize new object
        $room = new Room;

        //Assign Request values to database fields
        $room->status       = $request->get('status');
        $room->details      = $request->get('details');
        $room->house_id     = $request->get('house_id');
        $room->name         = $request->get('room_name');

        //Save request data
        $room->save();

        //Redirect to view all page
        return redirect()->route('all-rooms')->with('success', 'Record Successfully Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Room::find($id);

        return view('admin.single-room', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $house      = House::all();
        $data       = Room::find($id);

        return view('admin.edit-room', compact('data', 'house'));
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
        //Finding record to be edited
        $room = Room::find($id);

        //Perform Validations
        $this->validate(
            $request,
            [
                'status'=>'required',
                'details'=>'required',
                'house_id'=>'required',
                'room_name'=>'required'
            ]
        );

        //Assign Request values to database fields
        $room->status       = $request->get('status');
        $room->details      = $request->get('details');
        $room->house_id     = $request->get('house_id');
        $room->name         = $request->get('room_name');

        //Save request data
        $room->save();

        //Redirect to view all page
        return redirect()->route('all-rooms')->with('success', 'Record Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Room::find($id);
        $data->delete();

        return redirect()->route('all-rooms')->with('success', 'Record Successfully Deleted!');
    }

    public function delete($id){
        $room = Room::find($id);

        return view('admin.delete-room', compact('room'));
    }

    public function get_rooms($id){
        
    }
}

