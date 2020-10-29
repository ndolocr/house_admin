<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\House;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*Getting total number of rooms available from the database */
        $room = Room::all();
        $room_count = $room->count();

        /* Getting total number of vacant room available from the database */
        $vacant_rooms = Room::Where('status', 'Vacant');
        $vacant_rooms_count = $vacant_rooms->count();

        /* Getting total number of occupied room available from the database */
        $occupied_rooms = Room::Where('status', 'Occupied');
        $occupied_rooms_count = $occupied_rooms->count();

        /* Getting total number of occupied room available from the database */
        $not_renovated_rooms = Room::Where('status', 'Not Renovated');
        $not_renovated_rooms_count = $not_renovated_rooms->count();

        /* Getting total number of occupied room available from the database */
        $under_renovation_rooms = Room::Where('status', 'Under Renovation');
        $under_renovation_rooms_count = $under_renovation_rooms->count();

        /* Getting total number of houses from the database */
        $house = House::all();
        $house_count = $house->count();

        return view('admin.dashboard', compact('house_count', 'room_count', 'vacant_rooms_count', 'occupied_rooms_count', 'under_renovation_rooms_count', 'not_renovated_rooms_count'));
    }
}
