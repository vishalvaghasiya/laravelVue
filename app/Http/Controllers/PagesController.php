<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\View\View;
use http\Exception;

class PagesController extends Controller
{
    public function landing()
    {
        return view('welcome');
    }

    public function imageupload(Request $request)
    {
        if (count($request->images)) {
            foreach ($request->images as $image) {
                $image->store('images');
            }
        }

        return response()->json([
            "message" => "Done"
        ]);
    }
    public function postupload(Request $request)
    {
        /*return $request->all();*/
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required'
        ]);
        /*return $request->all();*/

        if ($request->hasFile('image')) {
            try{


            $images_cover = $request->file('image');
            $fileNamewithExt = $images_cover->getClientOriginalName();  // 1. image filename with extension
            $fileName = pathinfo($fileNamewithExt, PATHINFO_FILENAME);  //2. get file name
            $fileExtension = $images_cover->getClientOriginalExtension();   //3. get file extension
            $fileNameToStore = 'post' . md5(date('Y_m_d_Hi', time())) . '.' . $fileExtension;    //4. combinefile name and extension
            $path = $images_cover->storeAs('/public/post', $fileNameToStore); // upload file name
            }catch (Exception $exception){
                return response($exception);
            }

        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $postsave = new Post();
        $postsave->user_id = 1;
        $postsave->title = $request->title;
        $postsave->subtitle = $request->subtitle;
        $postsave->body = $request->description;
        $postsave->category = $request->category;
        $postsave->image = 'post/' . $fileNameToStore;
        $postsave->status = 1;
        $postsave->save();

        return response('your post submitted successfully');
// wrong        return response()->json(['output' => 'your post submitted successfully']);
//        return response()->json([$request->all()]);
    }
}
