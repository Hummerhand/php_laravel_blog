<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // dd(session()->all());
        // $foo = session('foo');
        return view('login.index');
    }

    public function store(Request $request) 
    {
        alert(__('Добро пожаловать!'));

        //$session = session();
        //session(['name' => 'Baz']);
        // session()->forget('name');
        // session()->flush();

        // $email = $request->input('email');
        // $password = $request->input('password');
        // $remember = $request->boolean('remember');        

        //$ip = $request->ip();
        //$path = $request->path();
        //$url = $request->url();

        //return response()->redirectTo('/foo');    //Перенаправляет по указанному маршруту 

        return redirect()->route('user');           // Сокращенный вариант - Перенаправляет по названию маршрута
    }
}
