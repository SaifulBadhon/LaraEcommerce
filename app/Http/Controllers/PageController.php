<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function contact(){

      return view('contact');
    }
    public function index(){
      return view('index');
    }
    public function products(){
      $products = Product::orderBy('id', 'desc')->get();
      return view('pages.products.index')->with('products', $products);
    }
}
