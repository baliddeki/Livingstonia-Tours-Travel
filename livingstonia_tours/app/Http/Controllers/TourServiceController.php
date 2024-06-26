<?php

namespace App\Http\Controllers;

use App\Models\TourService;
use Illuminate\Http\Request;

class TourServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //setting page title
        $page_title = 'Tour Packages';

        //fetch all tour packages from the database
        $tour_packages = TourService::all();

        //returning the tour packages view
        return view('tour_services.index', compact('tour_packages', 'page_title'));
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
}
