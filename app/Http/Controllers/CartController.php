<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Repositories\CartRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Services\CartService;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Flash;
use Cart;
use Response;

class CartController extends AppBaseController
{
    /** @var  CartRepository */
    private $cartRepository;

    private $service;

    public function __construct(CartRepository $cartRepo, CartService $cartService )
    {
        $this->middleware(['role:user'])->only('checkout');
        $this->cartRepository = $cartRepo;
        $this->service = $cartService;
    }

    /**
     * Display a listing of the Cart.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $carts = $this->cartRepository->all();

        return view('carts.index')
            ->with('carts', $carts);
    }

    /**
     * Show the form for creating a new Cart.
     *
     * @return Response
     */
    public function create()
    {
        return view('carts.create');
    }

    /**
     * Store a newly created Cart in storage.
     *
     * @param CreateCartRequest $request
     *
     * @return Response
     */
    public function store(CreateCartRequest $request)
    {
        $input = $request->all();

        $cart = $this->cartRepository->create($input);

        Flash::success('Cart saved successfully.');

        return redirect(route('carts.index'));
    }

    /**
     * Display the specified Cart.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cart = $this->cartRepository->find($id);

        if (empty($cart)) {
            Flash::error('Cart not found');

            return redirect(route('carts.index'));
        }

        return view('carts.show')->with('cart', $cart);
    }

    /**
     * Show the form for editing the specified Cart.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cart = $this->cartRepository->find($id);

        if (empty($cart)) {
            Flash::error('Cart not found');

            return redirect(route('carts.index'));
        }

        return view('carts.edit')->with('cart', $cart);
    }

    /**
     * Update the specified Cart in storage.
     *
     * @param int $id
     * @param UpdateCartRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCartRequest $request)
    {
        $cart = $this->cartRepository->find($id);

        if (empty($cart)) {
            Flash::error('Cart not found');

            return redirect(route('carts.index'));
        }

        $cart = $this->cartRepository->update($request->all(), $id);

        Flash::success('Cart updated successfully.');

        return redirect(route('carts.index'));
    }

    /**
     * Remove the specified Cart from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cart = $this->cartRepository->find($id);

        if (empty($cart)) {
            Flash::error('Cart not found');

            return redirect(route('carts.index'));
        }

        $this->cartRepository->delete($id);

        Flash::success('Cart deleted successfully.');

        return redirect(route('carts.index'));
    }


    public function addProduct( $product_id, $quantity = 1){

        $product = Product::find($product_id);
        $this->service->add($product, $quantity);

        Flash::success("{$product->name} has been added to cart");
        return redirect( route('home.index') );

    }


    public function removeProduct( $row_id){

        try{
            $this->service->remove($row_id);
        }
        catch(\Exception $e){
            Flash::success("There was an error");
        }

        Flash::success("product has been removesd from cart successfully");
        return redirect( route('cart.checkout') );

    }

    public function updateCart( $row_id, $data){

        Cart::update($row_id, 2); //
    }


    public function checkout(){

        $items = $this->service->getContent();
        //dd($items);

         if( empty($items)){

            Flash::error("Cart is empty");
            return redirect( route('home.index') );
        }
        return view('carts.checkout')->with('items', $items);
    }

    /**
     * increases the quatity of an item in the cart by 1
     */
    public function increaseQty($row_id){

        $product = Cart::get($row_id);
        $newQuantity = $product->qty + 1;
        $this->service->updateQuantity($row_id, $newQuantity);

        Flash::success("{$product->name} quantity has been increased by one");
        return redirect( route('cart.checkout') );
    }

    /**
     * decrease the quantity of a particualr product
     */
    public function decreaseQty($row_id){

        $product = Cart::get($row_id);
        $newQuantity = $product->qty - 1;

        if($newQuantity <= 0 ){
            $this->service->remove($row_id);
            $message =  "{$product->name} has been removed from cart.";
        }
        else{
            $this->service->updateQuantity($row_id, $newQuantity);
            $message ="{$product->name} quantity has been decreased by one";
        }

        Flash::success($message);
        return redirect( route('cart.checkout') );

    }


}

