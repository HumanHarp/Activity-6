<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        return view('products.view');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Logic to store the product
    }
}
