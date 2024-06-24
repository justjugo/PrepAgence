<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\PropertyFormRequest;
use Illuminate\Http\Request;
use App\Models\Property;
use GuzzleHttp\Promise\Create;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proreties.index',['properties'=>Property::orderBy('created_at','desc')->paginate(25)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
        return view('admin.proreties.form',['proprety'=>$property]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( PropertyFormRequest $request)
    {
        $element=Property::create($request->validated());
        return to_route('admin.proprety.index')->with('succes','le Bien a bien été créé');
    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        $property->exists=true;
        return view('admin.proreties.form',['proprety'=> $property]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)

    {
        dd($property->id);
        $property->delete();
        return to_route('admin.proprety.index')->with('succes','le Bien a bien été créé');

    }
}
