<?php

namespace App\Http\Controllers;

use App\Models\CaseStudies;
use Illuminate\Http\Request;


class CaseStudiesController extends Controller
{

    
    public function __construct()
    {
        // $this->middleware('authResource:case_study')->except('index', 'create', 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $case_studies = auth()->user()->caseStudy;
        return view('back.case-studies.index', compact('case_studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.case-studies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        // $request->user()->caseStudy()->create($request->post());
        $this->validate($request, [
            'title'   => 'required',
            'excerpt'   => 'required|min:25|max:105',
            'body'   => 'required',
        ]);
        $CaseStudies = new CaseStudies;
        $CaseStudies->title = $request->title;
        $CaseStudies->excerpt = $request->excerpt;
        $CaseStudies->body = $request->body;
        $CaseStudies->user_id = $request->user()->id;
        $CaseStudies->save();

        return redirect()->route('case-studies.index')->with('message', 'Case Studies created successfully');
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
    public function edit($id)
    {
        $caseStudies=CaseStudies::where('id', '=', $id)
            ->first();
           
        return view('back.case-studies.edit', compact('caseStudies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'   => 'required',
            'excerpt'   => 'required|min:25|max:105',
            'body'   => 'required',
        ]);
        CaseStudies::where('id', '=', $id)->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ]);

        return back()->with('message', 'Case Studies updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CaseStudies = CaseStudies::find($id);
        $CaseStudies->delete();
        return back();
    }
}
