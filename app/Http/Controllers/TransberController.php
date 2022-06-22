<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transber;
use Auth;

class TransberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transber = Transber::where('status', '!=', 'Success')
                            ->where(function ($query) {
                                $query->where('usernameA', Auth::user()->username)
                                      ->orWhere('usernameB', Auth::user()->username);
                            })
                            ->first();
        $trSuccess = Transber::where('status', 'Success')
                            ->where(function ($query) {
                                $query->where('usernameA', Auth::user()->username)
                                    ->orWhere('usernameB', Auth::user()->username);
                            })
                            ->get();
        return view('transber.transber', ['transber' => $transber, 'trSuccess' => $trSuccess]);
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
    public function show($transberId)
    {
        $transber = Transber::find($transberId);
        return view('transber.transber_detail', ['transber' => $transber]);
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
    public function destroy($transberId)
    {
        $transber = Transber::find($transberId);
        $transber->delete();
        return back()->with('success', 'Cancel Transber Successfully!');
    }

    public function transber(Request $request, $category)
    {
        $this->validate($request, [
            'usernameB' => ['required', 'exists:users,username'],
            'nominal' => ['required', 'numeric', 'min:50000'],
        ]);

        $transber = new Transber();
        $transber->payment_id = $request->input('payment');
        $transber->usernameA = $request->input('usernameA');
        $transber->usernameB = $request->input('usernameB');
        $transber->category = $category;
        $transber->nominal = $request->input('nominal');
        $transber->admin_fee = $request->input('nominal') * 3 / 100;
        $transber->status = 'A Waiting Payment';
        $transber->save();

        return redirect('/transber')->with('success', 'Transber Created!');
    }

    public function payment(Request $request, $transberId)
    {
        $this->validate($request, [
            'picTransfer' => ['required', 'image', 'mimes:jpg,jpeg,png'],
        ]);

        $transber = Transber::find($transberId);
        if ($request->file('picTransfer') != null) {
            $transber->status = 'Payment Accepted';
        }
        $transber->save();

        return redirect('/transber')->with('success', 'Payment Accepted!');
    }

    public function done($roleTransber, $transberId)
    {
        $transber = Transber::find($transberId);
        if ($roleTransber == 'buyer') {
            $transber->status = 'Success';
            $transber->save();
            return back()->with('success', 'Your Transber Success!');
        }
        elseif ($roleTransber == 'seller') {
            $transber->status = 'Done From Seller';
            $transber->save();
            return back()->with('success', 'Waiting Approval Buyer!');
        }
    }
}
