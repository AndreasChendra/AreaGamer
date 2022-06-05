<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Cart;
use App\Payment;
use App\Transaction;
use Auth;

class CartController extends Controller
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
    public function store(Request $request, $productId, $userId)
    {
        $product = Product::find($productId);
        $user = User::find($userId);
        $this->validate($request,[
            'note' => ['required'],
        ]);

        $cart = Cart::where([
            [
                'user_id', $userId
            ],
            [
                'product_id', $productId
            ],
        ])->first();

        if ($cart != null) {
            $cart->note = $request->input('note');
        } else {  
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $cart->note = $request->input('note');
        }
        $cart->save();

        return back()->with('toast_success', 'Add To Cart Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $cart = Cart::where('user_id', $userId)->get();
        $payment = Payment::all();
        return view('user.cart', ['cart' => $cart, 'payment' => $payment]);
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
    public function destroy(Request $request)
    {
        foreach ($request->check as $rc) {
            $cart = Cart::find($rc);
            $cart->delete();
        }
        return back()->with('success', 'Delete Successfully!');
    }

    public function checkOut(Request $request)
    {
        foreach ($request->check as $rc) {
            $cart = Cart::find($rc);
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->product_id = $cart->product->id;
            $transaction->payment_id = $request->input('payment');
            $transaction->status = 'A Waiting Seller';
            $transaction->note = $cart->note;
            $transaction->save();

            $cart->delete();
        }
        return redirect('/transaction')->with('success', 'Success Buy!');
    }

}
