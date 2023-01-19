<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Komentar;
use App\Models\Informasi;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $komen = Komentar::count();
        $inpo = Informasi::count();

        return view('home',compact('users','komen','inpo'));
    }
}
