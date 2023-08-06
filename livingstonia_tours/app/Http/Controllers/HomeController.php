<?php

namespace App\Http\Controllers;

use App\Models\TourService;
use App\Models\Service;
use App\Models\About;
use App\Models\Hotel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //fetch about information from database
        $about = About::all();

        //setting page title
        $page_title = 'Home';

        //fetch all services from the database
        $firm_services = Service::all();

        //fetch all tour packages from the database
        $tour_packages = TourService::all();

        //returning the landing page view
        return view('landing_page', compact('firm_services', 'tour_packages', 'page_title', 'about'));
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
}
