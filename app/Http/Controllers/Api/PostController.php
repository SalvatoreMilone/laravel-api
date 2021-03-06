<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($category = null){
        // return response()->json([
        //     'name' => 'mario',
        //     'surname' => 'rossi'
        // ]);
        if ($category) {
            $posts = Post::where("category_id", $category)->get();
        }else{
            $posts = Post::all();
        }
        return response()->json($posts);
    }

    public function filter($id = null ,$category = null){
        // return response()->json([
        //     'name' => 'mario',
        //     'surname' => 'rossi'
        // ]);
            $posts = Post::where("id", $id)->where("category_id", $category)->get();
        return response()->json($posts);
    }
}
