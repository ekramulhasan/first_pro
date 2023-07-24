<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FrontController extends Controller
{

   public function home(){

   $data = [

        'page_name' => 'home page',
        'course_name' => 'laravel 10'
    ];

    return response($data)
    ->header('content-type', 'application/json')
    ->cookie('id_card','ekramul hasan',3600);

    }


   public function service(){

    $services = [

        'web development',
        'graphics development',
        'app development',
        'gui development'

    ];

    return view('service', compact('services'));

    }


}
