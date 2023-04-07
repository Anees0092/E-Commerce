<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function index(){
        $products = Product::paginate(8);
        return view('website.shop.shop',compact('products'));
    }
    public function singleProduct($id){
        $products = Product::find($id);
        return view('website.shop.single-product',compact('products'));
    }
}
