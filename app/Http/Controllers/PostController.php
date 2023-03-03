<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Post;
use DB;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();

        // $post = DB::table('posts')
        // ->join('categories', 'posts.category_id', 'categories.id')
        // ->join('users', 'posts.user_id', 'users.id')
        // ->get();
        return view('posts', compact('post'));
    }

    public function posts(){

        $posts = Post::where('user_id', 2)->get();


        // $posts = DB::table('posts')
        //         ->join('categories', 'posts.category_id', 'categories.id')
        //         ->join('users', 'posts.user_id', 'users.id')
        //         ->where('user_id', 2)
        //         ->get();

            // echo "<pre>";
            // print_r($posts);
        return view('post_by_user', compact('posts'));
    }
}
