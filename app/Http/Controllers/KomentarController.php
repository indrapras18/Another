<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class KomentarController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function tambah(Request $request){
        Komentar::create($request->all());
        return redirect()->route('/');
    }

    public function info(){
        return view('info');
    }
}
