<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Service;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        $page_title = 'Book a Hotel';
        return view('hotel.index', compact('hotels', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $hId)
    {
        $hotel = Hotel::find($hId);

        return view('hotel.details', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * store hotel boking details
     
     */
    public function storeHotelBooking(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'number_of_people' => 'required',
            'number_of_rooms' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $hotel = Hotel::find($request->hotel_id);

        $hotel->bookings()->create([
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'number_of_people' => $request->number_of_people,
            'number_of_rooms' => $request->number_of_rooms,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('hotel.index')->with('success', 'Hotel booking successful');
    }
}
