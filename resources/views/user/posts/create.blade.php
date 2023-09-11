@extends('layouts.main')

@section('page.title')
    {{ __('Создать пост') }}
@endsection

@section('main.content')
    <x-title>
        <div class="h6 mb-3">
            <a href="{{ route('user.posts') }}">
                {{ __('Назад') }}
            </a>
        </div>

        {{ __('Создать пост') }}
        
    </x-title>

    <x-post.form action="{{ route('user.posts.store') }}" method="post">
        <x-button type="submit">
            {{ __('Создать') }}
        </x-button>
    </x-post.form>    
@endsection

@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush

@push('js')
    <script src="/js/trix.js"></script>
@endpush