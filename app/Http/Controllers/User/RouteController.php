<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    private $data;
    public function __construct()
    {
        $this->data = DB::table('project_details')->select("*")->first();
    }
    public function index() {
        return view('user.dashboard')->with("data", $this->data);
    }

    public function logout() {
        if(session()->has('usrToken')) {
            session()->pull('usrToken');
        }
        return redirect()->route('login');
    }
}
