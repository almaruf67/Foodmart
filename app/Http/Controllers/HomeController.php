<?php

namespace App\Http\Controllers;

use App\Models\category;
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
        $categories = Category::with('products')->get()->where('status','1');
        $categorizedData = $categories->map(function ($category) {
            return [
                'category_name' => $category->name,
                'products' => $category->products->map(function ($product) {
                    return [
                        'Title' => $product->Title,
                        'Poster' => $product->Poster,
                        'Description' => $product->Description,
                        'Price' => $product->Price,
                        'Short_Description' => $product->Short_Description,
                        'Old_Price' => $product->Old_Price,
                        // Add more product attributes as needed
                    ];
                }),
            ];
        });
        // dd(session()->get('cart'));

        // dd($categorizedData);
        return view('user.UserHome',compact('categorizedData'));

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
