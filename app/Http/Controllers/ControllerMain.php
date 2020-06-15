<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ControllerMain extends Controller
{
    public function index() {
        $products = Product::orderBy('id', 'DESC')->paginate(20);

        return view('welcome', [
            'products' => $products
        ]);
    }
}
