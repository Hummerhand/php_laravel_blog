@extends('layouts.main')

@section('page.title')
    {{ __('Мои посты') }}
@endsection

@section('main.content')
    <x-title>
        {{ __('Мои посты') }}

        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.create')}}">
                {{ __('Создать') }}
            </x-button-link>
        </x-slot>
    </x-title>

    @if (empty($posts))
        {{ __('Нет ни одного поста') }}
    @else
        @foreach ($posts as $post)
            <div class="mb-4">
                <h2 class="h6">
                    <a href="{{ route('user.posts.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h2>

                <div class="small text-muted">
                    {{ now()->format('d.m.Y H:i') }}
                </div>
            </div>
        @endforeach
    @endif
@endsection
