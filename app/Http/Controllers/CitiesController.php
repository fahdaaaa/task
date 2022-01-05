<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = Cities::latest()->where('flag',1)->paginate(5);

    
        return view('cities.index',compact('cities'))
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
        return view('cities.create');

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
        
        Cities::create($request->all());
     
        return redirect()->route('cities.index')
                        ->with('success','Cities created successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cities $city
     * @return \Illuminate\Http\Response
     */
    public function show(Cities $city)
    {
        //
        
        return view('cities.show',compact('city'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cities $city
     * @return \Illuminate\Http\Response
     */
    public function edit(Cities $city)
    {
        //
        return view('cities.edit',compact('city'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cities $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cities $city)
    {
        //

        $request->validate([
           // 'name' => 'required',
        ]);
    
        $city->update($request->all());
    
        return redirect()->route('cities.index')
                        ->with('success','countries updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cities $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cities $city)
    {
        //

        $city->delete();
    
        return redirect()->route('cities.index')
                        ->with('success','cities deleted successfully');
    
    }
    
    public function Permissions()
    {
        $cities = Cities::latest()->where('flag',0)->paginate(5);
    
        return view('cities.index',compact('cities'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

        
    public function FillSelectCities($state_id,$country_id)
    {
        //
        $cities = Cities::latest()->where('flag',1)
                                ->where('state_id',$state_id)
                                ->where('country_id',$country_id)   
                                ->get();
    
        return view('cities.select',compact('cities'));

    
    }
}
