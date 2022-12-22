<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        $categories = Category::all();
        $blogs = Blog::all();
        return view('backend-master.blog.index', compact('categories', 'blogs'));
    }

    function create(){
        $categories = Category::all();
        return view('backend-master.blog.create', compact('categories'));
    }

    function store(Request $response){
        $blog = new Blog();
        $blog->category_id = $response->category_id;
        $blog->title = $response->title;
        $blog->shorts = $response->shorts;
        $blog->description = $response->description;
        $blog->status = $response->status;
        $image = $response->image;
        if($image){
            $folder = 'backend-assets/images/blog-image/';
            $imageName = 'blo'.time().".".$image->getClientOriginalExtension();
            $image->move($folder, $imageName);
            $blog->image = $folder.$imageName;
        }
        $blog->save();
        return redirect()->back();
    }

    function edit(Request $response, $bId){
        $categories = Category::all();
        $blog = Blog::find($bId);
        return view('backend-master.blog.manage', compact('categories', 'blog'));
    }

    function update(Request $response, $bId){
        $blog = Blog::find($bId);
        $blog->category_id = $response->category_id;
        $blog->title = $response->title;
        $blog->shorts = $response->shorts;
        $blog->description = $response->description;
        $blog->status = $response->status;
        $image = $response->image;
        if($image){
            $folder = 'backend-assets/images/blog-image/';
            $imageName = 'blo'.time().".".$image->getClientOriginalExtension();
            $image->move($folder, $imageName);
            $blog->image = $folder.$imageName;
        }
        $blog->save();
        return redirect(route('index_blog'));
    }

    function delete($pId){
        $blog = Blog::find($pId);
        $blog->delete();
        return redirect(route('index_blog'));
    }
}
