<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $categories = Category::all();
        return view('backend-master.category.index', compact('categories'));
    }

    function create(){
        return view('backend-master.category.create');
    }

    function store(Request $response){
        $category = new Category();
        $category->name = $response->name;
        $category->description = $response->description;
        $category->status = $response->status;
        $image = $response->image;
        if($image){
            $folder = 'backend-assets/images/category-image/';
            $imageName = 'cat'.time().".".$image->getClientOriginalExtension();
            $image->move($folder, $imageName);
            $category->image = $folder.$imageName;
        }
        $category->save();
        return redirect()->back();
    }

    function edit(Request $response, $catId){
        $category = Category::find($catId);
        return view('backend-master.category.manage', compact('category'));
    }

    function update(Request $response, $catId){
        $category = Category::find($catId);
        $category->name = $response->name;
        $category->description = $response->description;
        $category->status = $response->status;
        $image = $response->image;
        if($image){
            $folder = 'backend-assets/images/category-image/';
            $imageName = 'cat'.time().".".$image->getClientOriginalExtension();
            $image->move($folder, $imageName);
            $category->image = $folder.$imageName;
        }
        $category->save();
        return redirect(route('index_category'));
    }

    function delete($catId){
        $category = Category::find($catId);
        $category->delete();
        return redirect(route('index_category'));
    }
}
