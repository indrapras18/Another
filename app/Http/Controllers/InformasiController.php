<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function informasi(){
        return view('informasi');
    }

    public function data_info(){
        $dinfo = Informasi::all();
        return view('data_info', compact('dinfo'));
    }

    public function add(Request $request){
        Informasi::create($request->all());
        return redirect()->route('informasi');
    }
}
