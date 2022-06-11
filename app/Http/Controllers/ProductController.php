<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;
use Auth;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->store_id = Auth::user()->store->id;
        $product->productType_id = $request->input('productType');
        $product->productCategory_id = $request->input('productCategory');
        $product->name = $request->input('productName');
        $product->price = $request->input('productPrice');
        $product->process = $request->input('process');
        $product->total_sold = '0';
        $product->description = $request->input('productDescription');

        if ($request->file('productPicture') != null) {
            $file = $request->file('productPicture');
            $nama_file = time()."_".$file->getClientOriginalName();
    
            if ($product->productCategory_id == 1) {
                $tujuan_upload = 'images/games/product/moba';
            } elseif ($product->productCategory_id == 2) {
                $tujuan_upload = 'images/games/product/pubg';
            } elseif ($product->productCategory_id == 3) {
                $tujuan_upload = 'images/games/product/free-fire';
            } elseif ($product->productCategory_id == 4) {
                $tujuan_upload = 'images/games/product/valorant';
            } elseif ($product->productCategory_id == 5) {
                $tujuan_upload = 'images/games/product/genshin';
            } elseif ($product->productCategory_id == 6) {
                $tujuan_upload = 'images/games/product/fortnite';
            }
            $file->move($tujuan_upload,$nama_file);
            $product->picture = $tujuan_upload.'/'.$nama_file;
        }
        $product->save();
        return back()->with('success', 'Add Product Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($productId)
    {
        $product = Product::find($productId);
        $review = Review::where('product_id', $product->id)->get();
        $totalReview = Review::where('product_id', $product->id)->count();
        $rate5 = Review::where('product_id', $product->id)->where('rating', '5')->count();
        $rate4 = Review::where('product_id', $product->id)->where('rating', '4')->count();
        $rate3 = Review::where('product_id', $product->id)->where('rating', '3')->count();
        $rate2 = Review::where('product_id', $product->id)->where('rating', '2')->count();
        $rate1 = Review::where('product_id', $product->id)->where('rating', '1')->count();
        $avgRate = Review::where('product_id', $product->id)->avg('rating');
        return view('product.product_detail', ['product' => $product, 'review' => $review, 'totalReview' => $totalReview, 'rate5' => $rate5, 'rate4' => $rate4, 'rate3' => $rate3, 'rate2' => $rate2, 'rate1' => $rate1, 'avgRate' => $avgRate]);
    }

    public function type($typeId)
    {
        $product = Product::where('productType_id', $typeId)->get();
        if($typeId == 1) {
            $type = 'Mobile';
        } else {
            $type = 'PC';
        }
        return view('product.product_type', ['product' => $product, 'type' => $type]);
    }

    public function category($categoryId)
    {
        $product = Product::where('productCategory_id', $categoryId)->get();
        return view('product.product_category', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function buy($productId)
    {
        $product = Product::find($productId);
        return view('user.buy', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productId)
    {
        $product = Product::findOrFail($productId);
        $review = Review::where('product_id', $product->id)->get();
        File::delete($product->picture);
        $review->each->delete();
        $product->delete();
        return back()->with('success', 'Delete Product Successfully!');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $product = Product::where('name', 'like', "%$search%")->get();
        return view('product.search', ['search' => $search, 'product' => $product]);
    }
}
