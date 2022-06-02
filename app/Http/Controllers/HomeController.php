<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use Auth;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $category = ProductCategory::all();
        $search = $request->input('search');
        $product = Product::where('name', 'like', "%$search%")->get();
        return view('home', ['categories' => $category, 'products' => $product]);
    }
}
