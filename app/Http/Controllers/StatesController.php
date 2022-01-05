<?php

namespace App\Http\Controllers;

use App\Models\States;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = States::latest()->where('flag',1)->paginate(5);
    
        return view('states.index',compact('states'))
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
        return view('states.create');

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
        
        States::create($request->all());
     
        return redirect()->route('states.index')
                        ->with('success','states created successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\States $state
     * @return \Illuminate\Http\Response
     */
    public function show(States $state)
    {
        //
        
        return view('states.show',compact('state'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\States $state
     * @return \Illuminate\Http\Response
     */
    public function edit(States $state)
    {
        //
        return view('states.edit',compact('state'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\States $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, States $state)
    {
        //

        $request->validate([
         //   'name' => 'required',
        ]);
    
        $state->update($request->all());
    
        return redirect()->route('states.index')
                        ->with('success','states updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\States $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(States $state)
    {
        //

        $state->delete();
    
        return redirect()->route('states.index')
                        ->with('success','states deleted successfully');
    
    }
    public function FillSelectStates($country_id)
    {
        //

        $states = States::latest()->where('flag',1)
                                ->where('country_id',$country_id)   
                                ->get();
    
        return view('states.select',compact('states'));
       
    }
    public function Permissions()
    {
        $states = States::latest()->where('flag',0)->paginate(5);
    
        return view('states.index',compact('states'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
