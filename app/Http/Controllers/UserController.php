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
        $this->validate($request, [
            'uploadPhoto' => ['required', 'image', 'mimes:jpg,jpeg,png'],
        ]);

        $user = User::find(Auth::user()->id);

        if ($request->file('uploadPhoto') != null) {
            $file = $request->file('uploadPhoto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'images/user/profile';
            $file->move($tujuan_upload, $nama_file);
            $user->picture = $tujuan_upload.'/'.$nama_file;
        }
        $user->save();
        return back()->with('success', 'Successfully Upload Photo!');
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
            'username' => ['required', 'unique:users', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
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
        return view('user.verif_ktp');
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
        Storage::put($file, $image_base64);
        
        return redirect('/profile')->with('success', 'Upload Image Successfully!');
    }

    public function changePass(Request $request)
    {
        $this->validate($request, [
            'new-password' => ['required', 'string', 'min:8'],
            'password-confirm' => ['required', 'string', 'min:8', 'same:new-password'],
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->input('new-password'));
        $user->save();

        return back()->with('success', 'Successfully Change Password!');
    }

    public function vResetPass()
    {
        return view('auth.reset_password');
    }

    public function resetPass(Request $request)
    {
        $this->validate($request, [
            'new-password' => ['required', 'string', 'min:8', 'confirmed'],
            'password-confirm' => ['required', 'string', 'min:8', 'same:new-password'],
        ]);

        $user = User::select()->where('email', $request->input('email'))->first();
        if($user == null){
            return redirect('/register')
            ->with('warning','Email not Found, Please Register First!'); 
        }
        $user->password = Hash::make($request->input('new-password'));
        $user->save();

        return redirect('/login')
        ->with('success','You have successfully Reset Password!');
    }
}
