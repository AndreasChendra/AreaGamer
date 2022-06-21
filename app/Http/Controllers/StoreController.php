<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Store;
use App\Product;
use App\ProductCategory;
use App\Transaction;
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
            'storeName' => ['required', 'min:5'],
            'storePicture' => ['required', 'image', 'mimes:jpg,jpeg,png'],
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
        // dd($request->input('filterType'));
        $store = Store::find($storeId);
        $search = $request->input('search');
        $product = Product::where('store_id', $storeId)
            ->where('name', 'like', "%$search%");

        if ($request->input('filterType') != null) {
            $product = $product->where('productType_id', '=', $request->input('filterType'));
            
        }
        if ($request->input('filterCategory') != null) {
            $product = $product->where('productCategory_id', '=', $request->input('filterCategory'));
        }
            
        $pCategory = ProductCategory::all();
        return view('store.store_info', ['store' => $store, 'product' => $product->paginate(4), 'pCategory' => $pCategory]);
    }

    public function order($storeId)
    {
        $transaction = Transaction::join('products', 'products.id', '=', 'transactions.product_id')
            ->join('stores', 'stores.id', '=', 'products.store_id')
            ->where('products.store_id', $storeId)
            ->where('transactions.status', 'A Waiting Seller')
            ->select('transactions.*')
            ->get();
        return view('store.order', ['transaction' => $transaction]);
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
            'storeName' => ['required', 'min:5'],
            'storePicture' => ['required', 'image', 'mimes:jpg,jpeg,png'],
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
        return back()->with('success', 'Update Store Successfully!');
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
