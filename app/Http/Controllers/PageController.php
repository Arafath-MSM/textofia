<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\News;
use App\Models\CaseStudies;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('front.home.index');
    }

    public function aboutUs(){
        return view('front.pages.about');
    }

    public function contactUs(){
        return view('front.pages.contact');
    }

    public function caseStudies(){
        return view('front.pages.case-studies');
    }

    public function pricing(){
        return view('front.pages.pricing');
    }

    public function team(){
        return view('front.pages.team');
    }

    public function news(){
        $news = News::orderBy('created_at', 'DESC')->get();

        return view('front.news.index', compact('news'));
    }

    public function graphIntelligence(){
        return view('front.pages.graph-intelligence');
    }

    public function textofiaPlatform(){
        return view('front.pages.textofia-platform');
    }

    public function textAnalyticsApis(){
        return view('front.pages.textAnalytics-apis');
    }

    public function blog(){
        $posts = Post::paginate(6);
        return view('front.blog.index',compact('posts'));
    }
        
    public function solutionPage($slug){
        if($slug == 'customised-large-language-models') {
            return view('front.pages.solutions.financial_data_analytic');
        } else if ($slug == 'document-information-extraction') {
            return view('front.pages.solutions.legal_document_analytics');
        } else if($slug == 'intelligent-agents') {
            return view('front.pages.solutions.new_media_intelligence');
        } else {
            abort(404);
        }
    }

    public function technologyPage($slug){
        if($slug == 'mlops') {
            return view('front.pages.technology.mlops');
        } else if ($slug == 'deep-learning') {
            return view('front.pages.technology.deep-learning');
        } else if($slug == 'microservices-orchestration') {
            return view('front.pages.technology.orchestration');
        } else {
            abort(404);
        }
    }

    public function cookiePolicyPage()
    {
        return view('front.pages.cookie-policy');
    }

    public function PrivacyPolicyPage()
    {
        return view('front.pages.privacy');
    }

    public function showPost(Post $post)
    {
        $post = $post->load('user','categories');

        return view('front.posts.show', compact('post'));
    }

    public function shownews($slug)
    {
        $news = News::where('slug', '=', $slug)->first();
        return view('front.news.single_news', compact('news'));
    }

    public function showsingleCaseStudies($slug)
    {
        $CaseStudy = CaseStudies::where('slug', '=', $slug)->first();
        return view('front.pages.single_case_studies', compact('CaseStudy'));
    }

    public function showsingleBlog($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        return view('front.blog.single_blog', compact('post'));
    }
}
