<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //     $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $items = product::orderBy('id', 'desc')->get();
        $Burgers = product::orderBy('id', 'desc')->Where('Category','Burger')->take(4)->get();;
        $Desserts = product::orderBy('id', 'desc')->Where('Category','Dessert')->take(4)->get();
        $Steaks = product::orderBy('id', 'desc')->Where('Category','Steak')->take(4)->get();
        $Coffees = product::orderBy('id', 'desc')->Where('Category','Coffee')->take(4)->get();
        $Pizzas = product::orderBy('id', 'desc')->Where('Category','Pizza')->take(4)->get();
        // dd(session()->get('cart'));

        // dd($Pizzas);
        return view('user.UserHome',compact('items','Burgers','Pizzas','Desserts','Steaks','Coffees'));

    }

    public function details(): View
    {
        return view('Pages/product');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        return view('Admin.home');
    }
}
