<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassController extends Controller
{
    public function ChangePass()
    {
        return view('admin.body.changePass');
    }

    public function UpdatePass(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('succsess', 'Password Change Is Successfull');
        } else {

            return redirect()->back()->with('error', 'Current Password Is Invalid');
        }
    }

    //User Profil Controller
    public function ChangeProfil()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('admin.body.changeProfil', compact('user'));
            }
        }
    }

    public function UserUpdate(Request $request){
        $user = User::find(Auth::user()->id);
            if ($user) {
                $user->name = $request['name'];
                $user->email = $request['email'];

                $user->save();
                return redirect()->back()->with('succsess', 'User Profil Update Successfull');
            } 
            else{
                return redirect()->back();
            }
    }
}