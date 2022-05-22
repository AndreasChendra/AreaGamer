<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Product;
use Auth;
use File;

class StoreController extends Controller
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
    public function create(Request $request)
    {
        $this->validate($request, [
            'storeName' => ['required'],
            'storePicture' => ['file', 'image', 'mimes:jpg,jpeg,png'],
        ]);

        $store = new Store();
        $store->user_id = Auth::user()->id;
        $store->name = $request->input('storeName');
        if ($request->file('storePicture') != null) {
            $file = $request->file('storePicture');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'images/store/profile';
            $file->move($tujuan_upload, $nama_file);
            $store->picture = $tujuan_upload.'/'.$nama_file;
        }
        $store->save();
        return redirect('home')->with('success', 'Store Created Successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $storeId)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $storeId)
    {
        $store = Store::find($storeId);
        $search = $request->input('search');
        $product = Product::where('store_id', $storeId)
            ->where('name', 'like', "%$search%")
            ->paginate(4); 
        return view('store.store_info', ['store' => $store, 'product' => $product]);
    }

    public function order($storeId)
    {
        return view('store.order');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $storeId)
    {
        $this->validate($request, [
            'storeName' => ['required'],
            'storePicture' => ['file', 'image', 'mimes:jpg,jpeg,png'],
        ]);

        $store = Store::find($storeId);
        $store->name = $request->input('storeName');
        if ($request->file('storePicture') != null) {
            $file = $request->file('storePicture');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'images/store/profile';
            $file->move($tujuan_upload, $nama_file);
            $store->picture = $tujuan_upload.'/'.$nama_file;
        }
        $store->save();
        return back();
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
