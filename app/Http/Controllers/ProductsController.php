<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return "product 1 product 2 product 3";
    }

    public function currentProduct()
    {
        return 'product X';
    }
}
