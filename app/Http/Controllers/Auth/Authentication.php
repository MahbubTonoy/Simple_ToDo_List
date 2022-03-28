<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Authentication extends Controller
{   
    private $data;
    public function __construct()
    {
        $this->data = DB::table('project_details')->select("*")->first();
    }
    public function index()
    {
        //
    }
    
    //login page
    public function login()
    {
        return view("auth.login")->with("data", $this->data);
        // dd($this->data);
    }

    // register page
    public function register()
    {
        // dd($this->data);
        return view("auth.register")->with("data", $this->data);
    }

    // forget password page
    public function forgetPwd()
    {
        return view("auth.forgetPassword")->with("data", $this->data);;
    }

    // change password page
    public function changePwd()
    {
        return view("auth.changePassword")->with("data", $this->data);;
    }
    
    //  email varification page
    public function verifyEmail()
    {
        return view("auth.verifyEmail")->with("data", $this->data);;
    }
}
