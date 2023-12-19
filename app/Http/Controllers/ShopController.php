<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function shopDetails(){
            return response('<h1>This is shop details</h1>',200);
    }
}
