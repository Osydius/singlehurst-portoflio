<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();

        return view('Posts.index', compact('posts'));
    }

    public function create() {
        return view('Posts.create');
    }

    public function store() {
        $this->validate(
            request(),
            [
                'name' => 'required',
            ]
        );

        Post::create(request(['name', 'body']));

        return redirect('/posts');
    }

    public function show(Post $post) {
        return view('Posts.show', compact('post'));
    }
}
