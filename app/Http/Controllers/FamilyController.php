<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Place;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         return view('families.showall',['families'=>Family::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $places=Place::all();
        return view('families.add-family',compact('places'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $family = Family::create($request->all());
         return self::index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Family $family)
    {
        //
        $family=Family::find($family)->first();
        if($family!=null)
        return view('families.showone',compact('family'));
        else 
        return 'No such id';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $places=Place::all();
        $family=Family::find($id);    
        return view('families.update-family',compact('places','family'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $family =Family::find($id);   
    $family->national_number=$request['national_number'];
    $family->name=$request['name'];
    $family->phone=$request['phone'];
    $family->place_id=$request['place_id'];
//     Family::where('id', $id)
//     ->update(['national_number' => $request['national_number'],
// 'name'=>$request['name'],
// 'phone'=>$request['phone'],
// 'place_id'=>$request['place_id']]); 
$family->save();
       return redirect()->route('families.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $family=Family::find($id);
        $family->delete();
return redirect()->route('families.index');    }

    public function addplacetofamily($id)
    {   $family = Family::find($id);
        $places = Place::all();       
        return view('families.addplacetofamily',compact('places','family'));

    }
    public function addplace(Request $request, $id)
    
    { 
    $family = Family::find($id);
    $family->place_id=$request['place_id'];
    $family->save();
     
       return redirect()->route('families.index');
    }
}
