<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Flash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::paginate(30);
        return view('home')
        ->with('products', $products);
    }


    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function profile(){

        $user = Auth::user();
        return view('profile')->with('user', $user);
    }


    public function updateProfile($id, Request $request){

        $user = User::find($id);

        if (empty($user)) {

            Flash::error('User not found');
            return redirect(route('user.profile'));
        }

        $user->fill( $request->all() );
        $user->save();

        Flash::success('user updated successfully.');
        return redirect(route('user.profile'));
    }
}
