<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class VisaProcessingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Fetch a list of all countries in alphabetical order
        $countries = Country::orderBy('name')->get();
        return view('visa_processing.index', compact('countries'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function showVisa(Country $country)
    {
        //Fetch information about the country
        $country = Country::find($country->id);

        return view('visa_processing.details', compact('country'));
    }
}
