<?php

namespace App\Http\Controllers;

use App\Models\Distination;
use Illuminate\Http\Request;

class DistinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Distination $distination)
    {   
        //
        // $distinations = Distination::all();
        // return view("home", compact("distinations"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Distination $distination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Distination $distination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Distination $distination)
    {
        //
    }
}
