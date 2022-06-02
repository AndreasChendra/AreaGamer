<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('user.profile', ['user' => $user]);
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
    public function update(Request $request)
    {
        $this->validate($request, [
            'username' => ['max:255'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'min:10', 'numeric'],
            'gender' => ['required', 'not_in:0'],
        ]);

        $user = User::find(Auth::user()->id);
        if($user->username == '-') {
            $user->username = $request->input('username');
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->gender = $request->input('gender');
        $user->save();

        return back()->with('success', 'Successfully Update Profile!');
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

    public function vVerifKTP()
    {
        return view('user.verifKTP');
    }

    public function sVerifKTP(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $img = $request->image;
        $folderPath = "images/user/selfie-idcard/";
        
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        
        $file = $folderPath . $fileName;

        $user->selfie_idcard = $file;
        $user->save();
        // Storage::put($file, $image_base64);
        
        return redirect('/profile')->with('success', 'Upload Image Successfully!');
    }

    public function changePass(Request $request)
    {
        $this->validate($request, [
            'new-password' => ['required'],
            'password-confirm' => ['required', 'same:new-password'],
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->input('new-password'));
        $user->save();

        return back()->with('success', 'Successfully Change Password!');
    }
}
