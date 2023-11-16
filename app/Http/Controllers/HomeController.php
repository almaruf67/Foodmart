<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use App\Models\category;
use Illuminate\View\View;
use App\Models\favproducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $categories = Category::with('products')->get()->where('status', '1');
        $categorizedData = $categories->map(function ($category) {
            return [
                'category_name' => $category->name,
                'products' => $category->products->map(function ($product) {
                    return [
                        'id' =>$product->id,
                        'Title' => $product->Title,
                        'Poster' => $product->Poster,
                        'Description' => $product->Description,
                        'Price' => $product->Price,
                        'Short_Description' => $product->Short_Description,
                        'Old_Price' => $product->Old_Price,
                        'isFavorited' => favproducts::where('product_id', $product->id)
                        ->where('user_id', Auth::id())
                        ->exists(),
                    ];
                }),
            ];
        });
        // dd(session()->get('cart'));

        // dd($categorizedData);
        return view('user.UserHome', compact('categorizedData'));
    }



    public function details(): View
    {
        return view('Pages/product');
    }

    public function ProDet($id)
    {
        $product = product::where('id',$id)->first();
        // $fav = favproducts::where('product_id', $id);
        // dd($product);
        $isfav = favproducts::where('product_id', $id)
                        ->where('user_id', Auth::id())
                        ->exists();
        // dd($isfav);
        return view('user.Details',compact('product','isfav'));

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
