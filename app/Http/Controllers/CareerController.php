<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::orderBy('created_at', 'DESC')->get();

        return view('back.career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $this->validate($request, [
            'title'   => 'required',
            'publish_date' => 'required',
            'schedule'   => 'required',
        ]);

        $career = new Career;
        $career->title    = $request->title;
        $career->location     = $request->location; 
        $career->schedule     = $request->schedule; 
        $career->body     = $request->body; 
        $career->publish_date     = $request->publish_date; 
        $career->user_id  = auth()->user()->id;
        $career->save();

        return redirect()->route('career.index')->with('message', 'Job details created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('back.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        $this->validate($request, [
            'title'   => 'required',
            'publish_date'   => 'required',
            'schedule'   => 'required',
        ]);

        $career->title    = $request->title;
        $career->location     = $request->location; 
        $career->schedule     = $request->schedule; 
        $career->body     = $request->body; 
        $career->publish_date     = $request->publish_date; 
        $career->user_id  = auth()->user()->id;
        $career->save();

        return redirect()->route('career.index')->with('message', 'Job details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career->delete();

        return back();
    }
}
