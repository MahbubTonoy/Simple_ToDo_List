<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Session;

class AuthCheck extends Controller
{
    public function saveUser(Request $request) {
        $request->validate([
            "name"=>"required",
            "username"=>"required:unique:users",
            "email"=>"required|email|unique:users",
            "password"=>"required|min:8",
            "tos"=>"required",
        ]);
        $user = new User;
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        if($user->save()) {
            return redirect()->route("login")->withSuccess("User Created Successfully!");
        } else {
            return back()->withErrors('Something Went Wrong, Please Check Back Again');
        }
    }

    public function loginUser(Request $request) {
        $request->validate([
            "username"=>"required",
            "password"=>"required|min:8",
            // "remember"=>"required"
        ]);

        $user = User::where('username', '=', $request->username)->first();
        if($user) {
            if(Hash::check($request->password, $user->password)) {
                Session::put('usrToken', $request->session()->getId());
                return redirect("user/dashboard");
            } else {
                return back()->withError('Password Doesn\'t Match. Try again.');
            }
        } else {
            return back()->withError('Username not found in our database.');
        }
    }
}
