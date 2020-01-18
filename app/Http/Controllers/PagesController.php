<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function landing(){
        return view('welcome');
    }
    public function postupload(Request $request){
        /*return $request->all();*/
        return response()->json([$request->all()]);
    }
}
