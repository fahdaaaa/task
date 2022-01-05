<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Countries::latest()->where('flag',1)->paginate(5);
    
        return view('countries.index',compact('countries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function Permissions()
    {
        $countries = Countries::latest()->where('flag',0)->paginate(5);
    
        return view('countries.index',compact('countries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('countries.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required',
        ]);
        
        Countries::create($request->all());
     
        return redirect()->route('countries.index')
                        ->with('success','countries created successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function show(Countries $country)
    {
        //
        
        return view('countries.show',compact('country'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function edit(Countries $country)
    {
        //
        return view('countries.edit',compact('country'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Countries $country)
    {
        //

        $request->validate([
            //'name' => 'required',
        ]);
    
        $country->update($request->all());
    
        return redirect()->route('countries.index')
                        ->with('success','countries updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Countries $country)
    {
        //

        $country->delete();
    
        return redirect()->route('countries.index')
                        ->with('success','countries deleted successfully');
    
    }

    
    public function FillSelectCountries()
    {
        //
        $countries = Countries::latest()->where('flag',1)->get();
    
        return view('countries.select',compact('countries'));

    
    }
}
