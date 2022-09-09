<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//inline blade template
use Illuminate\Support\Facades\Blade;

class ProductController extends Controller
{
    //
    function productList(){
        $totalProduct=20;

        //for inline blade template just for passing minimum data whitout creating new view
        return Blade::render('<h1>Product Quantity is {{$total}}</h1>',['total'=> $totalProduct]);   
        
        //  return "Product List";
    }

    function addProduct(){
        return "Product is added";
    }

    function updateProduct(){
        return "Product is updated";
    }
}
