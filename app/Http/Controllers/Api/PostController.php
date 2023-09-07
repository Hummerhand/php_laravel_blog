<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница списка постов';
    }

    public function create()
    {
        return 'Страница форма создание поста';
    }

    public function store()
    {
        return 'Запрос на создание поста';
    }

    public function show($post)
    {
        return 'Страница показа одного поста '. $post;
    }

    public function edit($post)
    {
        return 'Страница форма изменения поста ' . $post;
    }

    public function update($post)
    {
        return 'Запрос на изменения поста';
    }

    public function delete($post)
    {
        return 'Запрос на удаление поста';
    }

    public function like()
    {
        return 'Like + 1';
    }
}
