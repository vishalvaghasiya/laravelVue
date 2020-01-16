<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostApi;
use App\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function postApi(){
        $posts = Post::with('user:id,name,email')->get();
        return PostApi::collection($posts);
    }
}
