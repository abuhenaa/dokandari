<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopifyController extends Controller
{
    function getProducts(Request $request){

        $shop = $request->user();
        $shop = $shop->api()->rest('GET','/admin/products.json');
        echo "<pre>";
        //dd($shop);
        print_r($shop['body']);

    }
}
