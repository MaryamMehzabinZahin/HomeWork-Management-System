<?php

namespace App\Http\Controllers;

use App\Models\Homeworks;
use Illuminate\Http\Request;

class HomeworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hws=Homeworks::all();
        return view("homework_create",compact('hws'));
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
        $res=new Homeworks;
        $res->name=$request->input('name');

        $res->details=$request->input('details');
        $res->save();
        
        $request->session()->flash('msg','inserted');
        return redirect('homework_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homeworks  $homeworks
     * @return \Illuminate\Http\Response
     */
    public function show(Homeworks $homeworks)
    {
        // 
        $hws=Homeworks::all();
        return view("homework_show",compact('hws'));
       // return view('homework_show')->with('hwArr',$hws);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homeworks  $homeworks
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeworks $homeworks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homeworks  $homeworks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeworks $homeworks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homeworks  $homeworks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeworks $homeworks,$id)
    {
        //
        Homeworks::destroy(array('id',$id));
        return redirect('homework_show');

    }
}
