<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    // list posts
   public function index(Request $request){

    $posts = Post::paginate(5);
    return response() -> json([
        "status" => 1,
        "message" => "Post Fetched",
        "data" => $posts
    ]);
   }

   //create post
   public function store(Request $request){
    
    $validator = Validator::make($request->all(), [
        "title" => "required",
        "body" => "required"
    ]);

    if($validator ->fails()){
        return response() -> json([
            "status" => 0,
            "message" => "validation error",
            "data" => $validator ->errors() ->all()
        ]);
    }

    $post = Post::create([
        "title" => $request -> title,
        "body" => $request -> body
    ]);

    return response() -> json([
        "status" => 1,
        "message" => "post created",
        "data" => $post
    ]);

   }

   //Post Details 
   public function show(Request $request, $id){
    
    $post = Post::find($id);

    return response() -> json([
        "status" => 1,
        "message" => "post details",
        "data" => $post
    ]);

   }


   //Update Post 
   public function update(Request $request, $id){

    $validator = Validator::make($request->all(), [
        "title" => "required",
        "body" => "required"
    ]);

    if($validator ->fails()){
        return response() -> json([
            "status" => 0,
            "message" => "validation error",
            "data" => $validator ->errors() ->all()
        ]);
    }

    $post = Post::find($id);
    $post->title = $request->title;
    $post->body = $request ->body;
    $post -> save();


    return response() -> json([
        "status" => 1,
        "message" => "post updated",
        "data" => $post
    ]);


   }


   //Delete Post 
   public function destroy(Request $request, $id){

    $post = Post::find($id);
    $post->delete();

    return response() -> json([
        "status" => 1,
        "message" => "post deleted",
        "data" => null
    ]);
   }




}
