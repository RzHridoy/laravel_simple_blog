<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function create_user(){
        return view('backend-master.backend-files.create_user');
    }

    function store_user(Request $response){
        $response->validate([
            'name'=>'required',
        ]);
        $user = new User();
        $user->name = $response->name;
        $user->email = $response->email;
        $user->password = Hash::make($response->password);
        $user->save();
        return back();
    }
}