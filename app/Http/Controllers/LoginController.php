<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
    {

        if ($request->isMethod('post')) {


            $this->validate($request, [
                'name' => 'required',
                'password' => 'required'
            ]);


            $credentials = $request->only('name', 'password');


            if (Auth::attempt($credentials)) {
               
                return redirect('admin/dashboard')->with(['message' => 'success']);
            } else {

                return back()->withInput($request->only('name'));

            }
        }
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();


        return view('auth.login')->with(['message' => 'success logout']);
    }
}
