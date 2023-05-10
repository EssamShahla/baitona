<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Partner;
use App\Models\Program;
use App\Models\Slider;
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
        return response()->view('website.index', compact('sliders', 'activities', 'articles', 'ads', 'partners','videos' , 'programs'));
    }

    public function about()
    {
        $programs = Program::all();
        return response()->view('website.about' , compact('programs'));
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
