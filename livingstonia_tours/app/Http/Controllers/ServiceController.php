<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //setting page title
        $page_title = 'Services';

        //fetch all services from the database
        $firm_services = Service::all();

        //returning the services view
        return view('services', compact('firm_services', 'page_title'));
    }

    public function redirectToService(Service $service)
    {
        $routeName = $service->getRouteName();

        if ($routeName !== null) {
            // Redirect to the corresponding service index page
            return redirect()->route($routeName);
        } else {
            // Handle the case where the service type is not recognized
            // Redirect to some other page or show an error message
        }
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
