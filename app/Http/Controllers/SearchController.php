<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Formation;
use Illuminate\Http\Request;

use App\Http\Requests;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $query = $request->input('the_search');
        $categories = Category::all();
        

        $category_query = Category::where('title','LIKE', '%'.$query. '%')->get();

        $all_articles = Article::all();
        
        $articles = Article::where('title','LIKE', '%'.$query . '%')->get();

        $all_formations= Formation::all();
        $formations = Formation::where('titre','LIKE', '%'.$query . '%')->get();
        
        return view('front.search', compact('categories','tags','articles','query','category_query', 'all_articles','formations', 'all_formations'));
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
