<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        $categories = Category::all();
        $blogs = Blog::all();
        return view('backend-master.backend-files.index', compact('categories', 'blogs'));
    }
}
