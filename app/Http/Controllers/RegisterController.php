<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request) 
    {
        //$data = $request->all();                          Получает все поля с формы и кладет в массив
        //$data = $request->only(['name', 'email']);
        //$data = $request->except(['name', 'email']);

        $name = $request->input('name');                 //Получает конкретное поле с формы и кладет в переменную
        $email = $request->input('email');
        $password = $request->input('password');
        $pasword_confirm = $request->input('pasword_confirm');
        $agreement = $request->boolean('agreement');       //Получает конкретное поле с формы и возвращает булево значение
        // $avatar = $request->file('avatar');
        // dd($name, $email, $remember);
        // dd($data);
        // dd($request->has('name'));                       Проверяет конкретное поле с формы на наличие
        // dd($request->filled('name'));                    Проверяет конкретное поле с формы на заполнение
        // dd($request->missing('name'));                   Проверяет конкретное поле с формы на пропущенность
        
    }
}
