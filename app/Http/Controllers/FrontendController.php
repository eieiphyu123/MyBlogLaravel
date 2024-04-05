<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontendController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        // dd($posts); // post ထဲက data တွေပါ မပါ စစ်ကြည့်တာ
        return view('frontend.index',compact('posts')); //compact လုပ်ပြီး ်frontend page မှာ တကယ်ပြ
    }
    public function show($id)
    {
        // echo $id;
        $post=Post::find($id);
        // dd($post);
        return view('frontend.post',compact('post'));
    }
}
