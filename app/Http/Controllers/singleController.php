<?php

namespace App\Http\Controllers;

class singleController extends Controller
{

    public function __invoke()
    {

        $page_name = "contact page";
        $products = [

            1 => [

                'product_name' => 'laptop',
                'product_color' => 'white',
                'product_price' => 12000,

            ],

            2 => [

                'product_name' => 'apple phone',
                'product_color' => 'black',
                'product_price' => 50000,

            ],

            3 => [

                'product_name' => 'car',
                'product_color' => 'black',
                'product_price' => 200000,

            ],

        ];

        $product_count = count($products);

        // return view('contact', compact('product_count','products', 'page_name'));
        return response()->json([

            'products' => $products,
            'product-count' => $product_count,

        ], 200)
            ->header('content-type', 'application/json')
            ->cookie('id_card', 'ekramul hasan', 3600);

    }

}
