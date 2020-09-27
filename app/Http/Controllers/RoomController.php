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

    public function delete($id){
        //
    }
}
