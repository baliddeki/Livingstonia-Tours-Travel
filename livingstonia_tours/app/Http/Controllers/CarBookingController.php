<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarBooking;

class CarBookingController extends Controller
{
    //
    public function carbooking()
    {
        return view("carbooking");
    }
    public function submit(Request $request)
    {
        //validate the form data for the booking
        $request->validate([
            'name' => 'required|string',
            'Email' => 'required|string',
            'phone' => 'required|string',
            'dateOfDeparture' => 'required|date',
            'currentAddress' => 'required|string',
            'destinationAddress' => 'required|string',
            'daysOfStay' => 'required|string',
            'estimatedParticipates' => 'required|string',



        ]);

        // Create a new car booking record to save in the database
        $bookingData = new CarBooking();
        $bookingData->name = $request->input('name');
        $bookingData->Email = $request->input('Email');
        $bookingData->phone = $request->input('phone');
        $bookingData->dateOfDeparture = $request->input('dateOfDeparture');
        $bookingData->currentAddress = $request->input('currentAddress');
        $bookingData->destinationAddress = $request->input('destinationAddress');
        $bookingData->daysOfStay = $request->input('daysOfStay');
        $bookingData->estimatedParticipates = $request->input('estimatedParticipates');
        //$bookingData->save();

        // Add some debugging statements to check for any errors
        try {
            $bookingData->save();

            // Log a success message for debugging purposes
            \Log::info('Booking data saved successfully.');
        } catch (\Exception $e) {

            // Log or print the error for debugging
            \Log::error('An error occurred while saving the booking data: ' . $e->getMessage());

            // Return a response with an error message
            return redirect()->back()->with('error', 'An error occurred while saving the booking data.');
        }

        // If everything is successful, redirect to a success page or do any other actions
        return redirect()->route('success')->with('success', 'Booking submitted successfully!');
    }
}
