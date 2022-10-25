<?php

namespace App\Http\Controllers;

use App\Services\Product\ProductAPI\ProductAPI;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductAPI $api){

        $data = $api->getTest();
        dd($data);
    }
}
