<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Product;
use Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::where('user_id', Auth::user()->id)
                                    ->where('status', 'A Waiting Seller')->get();
        $trCancel = Transaction::where('user_id', Auth::user()->id)
                                    ->where('status', '!=', 'A Waiting Seller')
                                    ->where('status', '!=', 'Success')
                                    ->where('status', '!=', '-')->get();
        return view('transaction.transaction', ['transaction' => $transaction, 'trCancel' => $trCancel]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $transaction = Transaction::where('user_id', $userId)
                                    ->where('status', 'Success')->get();
        return view('transaction.transaction_history', ['transaction' => $transaction]);
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
    public function destroy($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $transaction->delete();
        return back()->with('success', 'Cancel Transaction Successfully!');
    }

    public function done($transactionId)
    {
        $transaction = Transaction::find($transactionId);
        $product = Product::where('id', $transaction->product_id)->first();
        $product->total_sold = $product->total_sold + 1;
        $transaction->status = 'Success';
        $transaction->save();
        $product->save();
        return back()->with('toast_success', 'Transaction Done!');
    }

    public function cancel(Request $request, $transactionId)
    {
        $transaction = Transaction::find($transactionId);
        $transaction->status = $request->input('status');
        $transaction->save();
        return back()->with('toast_warning', 'Transaction Cancel!');
    }
}
