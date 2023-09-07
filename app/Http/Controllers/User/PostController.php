<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id'      => 123,
            'title'   => 'Lorem ipsum dolor sit amet.',
            'content' => '<strong>Lorem</strong> ipsum dolor sit amet consectetur adipisicing elit. Rerum, est.',
        ];
        $posts = array_fill(0, 10, $post);
        
        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
    }

    public function show($post)
    {
        $post = (object) [
            'id'      => 123,
            'title'   => 'Lorem ipsum dolor sit amet.',
            'content' => '<strong>Lorem</strong> ipsum dolor sit amet consectetur adipisicing elit. Rerum, est.',
        ];
        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id'      => 123,
            'title'   => 'Lorem ipsum dolor sit amet.',
            'content' => '<strong>Lorem</strong> ipsum dolor sit amet consectetur adipisicing elit. Rerum, est.',
        ];
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
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