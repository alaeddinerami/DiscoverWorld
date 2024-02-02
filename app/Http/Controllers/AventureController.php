<?php

namespace App\Http\Controllers;

use App\Models\Aventure;
use App\Models\Distination;
use App\Models\Image;
use Illuminate\Http\Request;

class AventureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
    
        $aventures = Aventure::with('image')->get();
        $distinations = Distination::with('image')->get();
        return view("home", compact("aventures",'distinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $distinations = Distination::all();
        return view("create", compact("distinations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());    

        $incomingFields = $request->validate([
            'titelAventure' => 'required',
            'descriptionsAventeur' => 'required',
            'distination_id' => 'required',
            'conseils' => 'required',

        ]);
        $result = Aventure::create($incomingFields);
        if ($request->hasFile('image')) {
            foreach ($request->image as $uploadedImage) {
                $image = new Image();
                $image->aventure_id =$result->id;
                $image->image  = $uploadedImage->store('images', 'public');

                $image->save();
            }
        }

        // insertion

    }

    /**
     * Display the specified resource.
     */
    public function show(Aventure $aventure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aventure $aventure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aventure $aventure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aventure $aventure)
    {
        //
    }
}
