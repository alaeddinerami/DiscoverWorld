<?php

namespace App\Http\Controllers;

use App\Models\Aventure;
use App\Models\Distination;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AventureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // Cache keys for aventures and distinations
        $aventuresCacheKey = 'aventures_data';
        $distinationsCacheKey = 'distinations_data';
    
        // Retrieve aventures from the cache
        $aventures = Cache::remember($aventuresCacheKey, now()->addHours(1), function () {
            return Aventure::with('image')->get();
        });
    
        // Retrieve distinations from the cache
        $distinations = Cache::remember($distinationsCacheKey, now()->addHours(1), function () {
            return Distination::with('image')->get();
        });
       
    
        // Retrieve the most popular destination from the cache
        $mostPopularDistination = Cache::remember('most_popular_destination', now()->addHours(1), function () {
            return $this->mostPopularDestination();
        });
    
        $aventuresCount = Aventure::count();
    
        return view("home", compact("aventures", 'distinations', 'aventuresCount', 'mostPopularDistination'));
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
                $image->image = $uploadedImage->store('images', 'public');

                $image->save();
            }
            Cache::forget('aventures_data');
            Cache::forget('distinations_data');
            return redirect()->route('create');
        }

        // insertion

    }
    public function filter($id){

        
        $aventures = Aventure::where('distination_id', $id)->get();


        return view('aventure_distination', compact('aventures'));
       

    }

    public function order(Request $request){
        $selectOrder = $request->order;
        $distinations = Distination::with('image')->get();
        $aventure = Aventure::query();

        if ($selectOrder == 0){
            $aventure->orderBy('created_at');

        }else{
            $aventure ->orderByDesc('created_at');
        }
        $aventures = $aventure->get();
        $aventuresCount = Aventure::count();
        $mostPopularDistination = $this->mostPopularDestination();

        return view('home', compact('aventures','distinations','aventuresCount','mostPopularDistination'));

    }

    public function mostPopularDestination(){

        $result = DB::select("SELECT distinations.*, COUNT(aventures.id) as adventure_count FROM distinations LEFT JOIN aventures ON distinations.id = aventures.distination_id GROUP BY distinations.id, distinations.nameDistination,distinations.created_at,distinations.updated_at ORDER BY adventure_count DESC LIMIT 1;");       
        return count($result) > 0 ? (object) $result[0] : null;
    }




    /**
     * Display the specified resource.
     */
    public function show(Aventure $aventure)
    {
        return view("single_aventure", compact("aventure"));
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
