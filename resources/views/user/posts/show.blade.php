@extends('layouts.main')

    {{-- @section('page.title')
        {{ $post->title }}
    @endsection --}}

    @section('main.content')
                
        <x-title>
            {{ $post->title }}

            <x-slot name="right">
                <x-button-link href="{{ route('user.posts.edit', $post->id) }}">
                    {{ __('Изменить') }}
                </x-button-link>
            </x-slot>
        </x-title>
    
        <p>
            {!! $post->content !!}
        </p>

        <div class="small text-muted mb-3">
            {{ now()->format('d.m.Y H:i') }}
        </div>

        <div class="mb-3">
            <a href="{{ route('user.posts') }}">
                {{ __('Назад') }}
            </a>
        </div>
    @endsection