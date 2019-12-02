<?php

namespace App\Http\Services;

use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Contracts\Buyable;


class CartService
{

    /**
     * Adds a new item to the cart and assocaites it with the product model
     *
     */
    public function add( Buyable $product, $quantity){

        $cartItem = Cart::add( $product->id, $product->name, $quantity, $product->price, $product->weight );
        $cartItem->associate('Product');
        session(['cartItemCount' => Cart::count() ]);
        //session(['cartRowID' => $cartItem->rowId ]);

    }


    /**
     * Updates the content of a cart
     */
    public function update( Buyable $product, $quantity){

        Cart::add($product, $quantity);
    }


    /**
     * remove an item from a cart
     */
    public function remove( $row_id){

        return Cart::remove($row_id);
    }


    /**
     * Get the contents of a cart
     */
    public function getContent(){
        return Cart::content();
    }

    /**
     * Get the total price of products in a cart given the price of each product and their quantity
     *
     */
    public function getTotal(){
        return Cart::total();
    }

    public function uniqueCount(){
        return Cart::content()->count();
    }


    /**
     * clears the cart
     * a wrapper for the destroy method.
     */
    public function clearCart(){
        return Cart::destroy();
    }

    public function updateQuantity($row_id, $quantity){
        return Cart::update($row_id, $quantity);
    }

}
