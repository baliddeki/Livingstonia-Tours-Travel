<?php

namespace App\Http\Controllers;

use App\Models\HotelBooking;
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
    public function storeHotelBooking(Request $request, $hId)
    {

        $validatedData = $request->validate([
            'hotel_id' => 'required|exists:hotels,hId',
            'Check_in' => 'required|date',
            'Check_out' => 'required|date|after:Check_in',
            'Number_of_people' => 'required',
            'Number_of_rooms' => 'required',
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $hotel = Hotel::find($hId);

        $hotel_booking = new HotelBooking([
            'hotel_id' => $hotel->hId,
            'check_in' => $validatedData['Check_in'],
            'check_out' => $validatedData['Check_out'],
            'number_of_people' => $validatedData['Number_of_people'],
            'number_of_rooms' => $validatedData['Number_of_rooms'],
            'fname' => $validatedData['fname'],
            'lname' => $validatedData['lname'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);

        $hotel_booking->save();

        return redirect()->route('hotel.index')->with('success',  $hotel->hName . ' booking has been successful thankyou!!');
    }
}
