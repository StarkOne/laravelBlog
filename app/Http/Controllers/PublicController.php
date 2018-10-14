<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {

        return view('welcome');
    }

    public function displayPosts()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            dump($post->title);
        }
        //dd($posts);
    }
}
