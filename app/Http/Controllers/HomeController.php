<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $blogs = Blog::latest()->get();
        return view('frontend-master.frontend-files.index', compact('blogs'));
    }

    function categories(){
        $categories = Category::all();
        return view('frontend-master.frontend-files.categories', compact('categories'));
    }

    // function login(){
    //     return view('frontend-master.frontend-files.login');
    // }

    function blog_post($bId){
        $viewblog = Blog::find($bId);
        return view('frontend-master.frontend-files.blog_post', compact('viewblog'));
    }

    function category_detail($catId){
        $blogs = Blog::where('category_id', $catId)->get();
        $viewcategory = Category::find($catId);
        return view('frontend-master.frontend-files.category_detail', compact('blogs', 'viewcategory'));
    }
}
