<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    public function index()
    {
        $careers = Career::orderBy('id', 'DESC')->limit(4)->get();
        $totalCount = Career::get()->count();

        return view('front.pages.careers', compact('careers','totalCount'));
    }

    public function showSinglePage($slug)
    {
        $career = Career::where('slug', '=', $slug)->first();

        return view('front.pages.career', compact('career'));
    }

    public function loadDataAjax(Request $request)
    {
        $output = '';
        $id = $request->id;
        
        $careers = Career::where('id','<',$id)->orderBy('id','DESC')->limit(4)->get();
        
        if(!$careers->isEmpty())
        {
            foreach($careers as $career)
            {
                $url = url('careers/'.$career->slug);
            
                $output .= '<div class="content d-flex flex-column">
                                <h6>'.$career->title.'</h6>
                                <span>'.preg_replace("/[_]/", "", $career->schedule).', '.$career->location.'</span>
                                <a href="'.$url.'">See Job description →</a>
                            </div>';
            }
            
            $output .= '<div class="data-btn text-center" id="remove-row">
                            <button class="btn" id="btn-more" data-id="'.$career->id.'"> Load More </button>
                        </div>';
            
            echo $output;
        }
    }
}
