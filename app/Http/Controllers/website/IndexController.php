<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Partner;
use App\Models\Program;
use App\Models\Section;
use App\Models\Slider;
use App\Models\Report;
use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'desc')->take(3)->get();
        $activities = Article::where('type', '3')->orderBy('created_at', 'desc')->take(4)->get();
        $articles = Article::where('type', '1')->orderBy('created_at', 'desc')->take(3)->get();
        $ads = Article::where('type', '2')->orderBy('created_at', 'desc')->take(6)->get();
        $videos = Video::orderBy('created_at', 'desc')->take(1)->get();
        $partners = Partner::all();
        $programs = Program::all();
        $reports = Report::all();

        return response()->view('website.index', compact('sliders', 'activities', 'articles', 'ads', 'partners','videos' , 'programs' , 'reports'));
    }

    public function about()
    {
        $programs = Program::all();
        return response()->view('website.about' , compact('programs'));
    }

    public function blog()
    {
        $articleall = Article::where('type', '1')->orderBy('created_at', 'desc')->get();
        $programs = Program::all();

        return response()->view('website.blog' , compact('programs','articleall'));
    }


    public function policies()
    {
        $programs = Program::all();
        $reports = Report::all();

        return response()->view('website.policies' , compact('programs' , 'reports'));
    }


    public function financial()
    {
        $programs = Program::all();
        $financials = Report::where('type', '1')->orderBy('created_at', 'desc')->get();

        return response()->view('website.financial' , compact('programs','financials'));
    }


    public function administrative()
    {
        $programs = Program::all();
        $administratives = Report::where('type', '2')->orderBy('created_at', 'desc')->get();

        return response()->view('website.administrative' , compact('programs','administratives'));
    }


    public function programs($id){
        $programs = Program::all();
        $sections = Section::where('program_id' , $id)->get();
        $thisProgram = Program::findOrFail($id);

        return response()->view('website.program' , compact('programs' ,'sections' , 'thisProgram'));
    }


    public function article_details($id){
        $programs = Program::all();
        $article = Article::findOrFail($id);

        return response()->view('website.article-details' , compact('programs' ,'article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
