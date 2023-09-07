@extends('layouts.main')

@section('page.title')
    {{ __('Изменить пост') }}
@endsection

@section('main.content')
    <x-title>
        <div class="h6 mb-3">
            <a href="{{ route('user.posts.show', $post->id) }}">
                {{ __('Назад') }}
            </a>
        </div>

        {{ __('Изменить пост') }}        
    </x-title>

    <x-post.form action="{{ route('user.posts.update', $post->id) }}" method="put" :post="$post" />
    
@endsection

@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush

@push('js')
    <script src="/js/trix.js"></script>
@endpush