<?php

use Illuminate\Http\Request;
use App\Http\Controllers\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\singleController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\user_Front_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [user_Front_controller::class, 'user_info'])->name('home');

Route::get('/service-page',[FrontController::class, 'service']


    //     $services = [

    //         'web development',
    //         'graphics development',
    //         'app development',
    //         'gui development'

    //     ];

    // return view('service', compact('services'));
)->name('service');

Route::get('/about-page', function () {

    return view('about');
})->name('about');

Route::get('/contact-page', singleController::class

    // $page_name = "contact page";
    // $products = [

    //     1 => [

    //         'product_name' => 'laptop',
    //         'product_color' => 'white',
    //         'product_price' => 12000

    //     ],

    //     2 => [

    //         'product_name' => 'apple phone',
    //         'product_color' => 'black',
    //         'product_price' => 50000

    //     ],

    //     3 => [

    //         'product_name' => 'car',
    //         'product_color' => 'black',
    //         'product_price' => 200000

    //     ]


    // ];

    // $product_count = count($products);

    // // return view('contact', compact('product_count','products', 'page_name'));
    // return response()->json([

    //     'products' => $products,
    //     'product-count' => $product_count

    // ],200)
    // ->header('content-type', 'application/json')
    // ->cookie('id_card','ekramul hasan',3600);

)->name('contact');


// Route::get('/contact-page/{contact_id?}/{contact_person?}', function ($contact_id=null, $contact_person=null) {
//     return "contact us ".$contact_id.' '.$contact_person;
// })->name('contact');


Route::get('/user/{user_name}', function ($user_name) {

    echo $user_name;

})->where('user_name', '.*');

// Route::get('/user/{user_id}/{user_name}', function ($user_id, $user_name) {

//     echo $user_id.' '. $user_name;

// })->where(['user_id' => '[0-9]+', 'user_name'=> '[A-Za-z]+']);

Route::get('/category/{category_name}', function ($category_name) {

    echo $category_name;

})->whereIn('category_name', ['televison','computer', 'laptop', 'chicken']);



Route::get('/content/download', function () {

    return response()->download(public_path('/al-islam.pdf'), 'islamic book');

})->name('donwload');



Route::prefix('page')->name('laravel.')->group(function(){


    Route::get('/home', function () {

        return view('home');
    })->name('home');


    Route::get('/service', function () {

        return view('service');
    })->name('service');


    Route::get('/about', function () {

        return view('about');
    })->name('about');

});


Route::resource('/posts', post::class);
Route::resource('/category', categoryController::class);
Route::resource('/subcategory', SubcategoryController::class);
Route::resource('file', FileuploadController::class);
