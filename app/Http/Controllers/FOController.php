<?php

namespace App\Http\Controllers;

use App\Models\InformasiGereja;
use App\Models\WartaParoki;

class FOController extends Controller
{
    public function show(){
        $wartaParoki = WartaParoki::all();
        $informasiGereja = InformasiGereja::all();

        return view('home', compact('wartaParoki', 'informasiGereja'));
    }

    public function showWartaParoki($id){
        $wartaParoki = WartaParoki::find($id);

        if($wartaParoki === null){
            return abort(404);
        }

        return view('warta-paroki.show', compact('wartaParoki'));
    }
    public function showInformasi($id){
        $informasiGereja = InformasiGereja::find();

        if($informasiGereja === null){
            return abort(404);
        }

        return view('informasi-gereja.show', compact('informasiGereja'));
    }
}
