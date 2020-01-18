<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function landing(){
        return view('welcome');
    }
    public function postupload(Request $request){
        /*return $request->all();*/
        /*$validator = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required'
        ]);*/
        /*if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()],422);
        }*/
        /*return $request->all();*/
        $postsave = new Post();
        $postsave->user_id = 1;
        $postsave->title = $request->title;
        $postsave->subtitle = $request->subtitle;
        $postsave->body = $request->description;
        $postsave->category = $request->category;
        $postsave->status = 1;
        $postsave->save();
        return response('your post submitted successfully');
// wrong        return response()->json(['output' => 'your post submitted successfully']);
//        return response()->json([$request->all()]);
    }
}
