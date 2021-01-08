<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assigns = Assign::all();

        return view('assign.index', ['assigns' => $assigns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assign = Assign::create(['name' => $request->name]);

        if($assign) {
            return redirect()->route('assigns.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function show(Assign $assign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function edit(Assign $assign)
    {

        return view('assign.edit', ['assign' => $assign]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assign $assign)
    {
        $assign->update(['name' => $request->name]);

        return redirect()->route('assigns.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assign $assign)
    {
        $assign->delete();

        return redirect()->route('assigns.index');
    }
}
