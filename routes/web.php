<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home',[
        'cate_name' => 'home page',
        'text' => 'ALLAH IS ONE'
    ]);

});

Route::get('/service-page', function () {


        $services = [

            'web development',
            'graphics development',
            'app development',
            'gui development'

        ];

    return view('service', compact('services'));
})->name('service');

Route::get('/about-page', function () {
    return view('about');
})->name('about');

Route::get('/contact-page', function () {

    $page_name = "contact page";
    $products = [

        1 => [

            'product_name' => 'laptop',
            'product_color' => 'white',
            'product_price' => 12000

        ],

        2 => [

            'product_name' => 'apple phone',
            'product_color' => 'black',
            'product_price' => 50000

        ],

        3 => [

            'product_name' => 'car',
            'product_color' => 'black',
            'product_price' => 200000

        ]


    ];

    $product_count = count($products);

    return view('contact', compact('product_count','products', 'page_name'));

})->name('contact');


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

