@extends('layouts.main')

    @section('page.title')
        {{ $post->title }}
    @endsection

    @section('main.content')
        <div class="mb-3">
            <a href="{{ route('blog') }}">
                {{ __('Назад') }}
            </a>
        </div>
        

        <x-title>
            {{ $post->title }}
        </x-title>
    
        <p>
            {!! $post->content !!}
        </p>
    @endsection