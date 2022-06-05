<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;
use Auth;
use Carbon\Carbon;

class ReviewController extends Controller
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
    public function review(Request $request, $productId)
    {
        // $this->validate($request,[
        //     'rating' => ['required', 'not_in:0'],
        //     'description' => ['required', 'string'],
        // ]);

        $product = Product::find($productId);

        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->product_id = $productId;
        $review->description = $request->input('description');
        $review->rating = $request->input('rating');

        if ($request->file('pictureReview') != null) {
            $file = $request->file('pictureReview');
            $nama_file = time()."_".$file->getClientOriginalName();
    
            if ($product->productCategory_id == 1) {
                $tujuan_upload = 'images/review/moba';
            } elseif ($product->productCategory_id == 2) {
                $tujuan_upload = 'images/review/pubg';
            } elseif ($product->productCategory_id == 3) {
                $tujuan_upload = 'images/review/free-fire';
            } elseif ($product->productCategory_id == 4) {
                $tujuan_upload = 'images/review/valorant';
            } elseif ($product->productCategory_id == 5) {
                $tujuan_upload = 'images/review/genshin';
            } elseif ($product->productCategory_id == 6) {
                $tujuan_upload = 'images/review/fortnite';
            }
            $file->move($tujuan_upload,$nama_file);
            $review->picture = $tujuan_upload.'/'.$nama_file;
        }

        $review->created_at = Carbon::now();
        $review->updated_at = Carbon::now();

        $review->save();
        return back()->with('success', 'Successfully Send Review!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
