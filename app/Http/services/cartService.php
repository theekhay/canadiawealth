<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CartService
{
   private $cart;


   public function addProduct( Product $product){
       Cart::add();
   }

}
