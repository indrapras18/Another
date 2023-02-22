<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class KomentarController extends Controller
{
    public function index(){


    }

    public function tambah(Request $request){
        Komentar::create($request->all());
        return redirect()->route('landing');
    }

    public function info(){
        return view('info');
    }

    // public function dashboard(){
    //     return view('dashboard');
    // }

    public function features(){
        return view('features');
    }

    public function landing(){
        return view('landing');
    }

    public function data(){
        $datakomen = Komentar::all();
        return view('data',compact('datakomen'));
    }
}
