<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class user_Front_controller extends Controller
{
    public function user_info(){

    //    $users = User::all();
       $users = User::latest()->get();

       return view('home',['user_data'=>$users]);


    }
}
