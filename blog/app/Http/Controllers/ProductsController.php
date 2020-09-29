<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function show($id){
        $products = [
            'cpu' => "Core i7",
            'keyboard' => "Lorem"
        ];
        $product = $products[$id];
        return view('pages.test',compact('product'));
    }
}
