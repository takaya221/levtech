<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)   //$post = new post()　　つまり&postはPostのインスタンス
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
        //postsという名前でpostsテーブルの全データを渡す
        //Postは&postのクラスであるためここのget関数はどこに含まれるものか->Post.php
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
}
