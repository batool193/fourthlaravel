<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            return view('places.showplaces',['places'=>Place::all()]);

             }
             catch(\Exception $ex)
             {
                 echo $ex->getMessage();
             }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('places.add-place');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $place =  Place::create($request->all());
          return self::index();

    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
