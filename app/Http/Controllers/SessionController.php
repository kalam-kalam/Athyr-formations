<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sessions= Session::all();

        $sortSessions = array_values(array_sort($sessions, function($value)
        {
            return $value['session_start'];
        }));
        
        
        $formations = Formation::all();


        return view('admin.sessions/index', compact('sessions', 'formations', 'sortSessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $formations = Formation::lists('titre', 'id');
        return view('admin.sessions.create', compact('formations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FormRequest $request)
    {
        Session::create($request->all());
        return back()->with(['message' => 'votre post a bien été ajouté']);

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
        $formations = Formation::lists('titre', 'id');
        $session = Session::find($id);
        return view('admin.sessions.edit', compact('session', 'formations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\FormRequest $request, $id)
    {
        $session = Session::find($id);
        $session->update($request->all());

        return back()->with(['message' =>'updated with success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Session::destroy($id);

        return back()->with(['message'=>'deleted with success']);
    }
}
