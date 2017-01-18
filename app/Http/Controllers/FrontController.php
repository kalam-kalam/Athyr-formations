<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Formation;
use App\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sortArticles= Article::orderBy('created_at','desc')->get();

        /*$sortArticles = array_values(array_sort($articles, function($value)
        {
            return $value['created_at'];
        }));*/
        
        $formations = Formation::all();

        $sessions= Session::all();

        foreach($sessions as $session){
            $i=strtotime($session->session_start);
            $session->session_start = $i;
        }

        $sortSessions = $sessions->sortBy('session_start');

        $categories = Category::all();
        
        return view('front.home', compact('formations','sortSessions', 'articles','sortArticles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        
    }
}
