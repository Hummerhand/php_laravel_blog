@extends('layouts.auth')

    @section('page.title')
        {{ __('Вход') }}
    @endsection

    @section('auth.content')
        <x-login.card />
    @endsection
    
