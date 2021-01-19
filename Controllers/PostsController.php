<?php

namespace App\Controllers;

use App\Models\Post;
use App\Core\Router\Request;
use App\Core\View;

class PostsController
{
    public function index()
    {
        $posts = Post::all();
        new View('posts/index', compact('posts'));
    }

    public function create()
    {
        new View('posts/create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = $request->getBody()['user_id'];
        $post->title = $request->getBody()['title'];
        $post->message = $request->getBody()['message'];

        if ($post->save()) {
            header('Location: /posts');
        }
    }

    public function show(Request $request, int $id)
    {
        $post = Post::find($id);
        new View('posts/show', compact('post')); // ['post' => $post]
    }
}