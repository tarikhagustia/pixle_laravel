<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_saya = DB::table('status_users')->where('user_id' , Auth::user()->id)
        ->join('users', 'users.id', '=', 'status_users.user_id')
        ->orderBy('status_users.created_at', 'desc')
        ->first();
        $status_teman = DB::table('status_users')
        ->join('users', 'users.id', '=', 'status_users.user_id')
        ->orderBy('status_users.created_at', 'desc')
        ->get();
        return view('home', ['saya' => $status_saya , 'teman' => $status_teman]);
    }
    public function profile()
    {
        return view('profile');
    }
}
