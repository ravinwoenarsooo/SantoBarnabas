<?php

namespace App\Http\Controllers;

use App\Models\InformasiGereja;
use App\Models\Profil;
use App\Models\WartaParoki;

class FOController extends Controller
{
    public function show(){
        $wartaParoki = WartaParoki::all();
        $informasiGereja = InformasiGereja::all();
        $profile = Profil::first();
        // $informasiGereja = InformasiGereja::orderBy('TanggalUpload', 'desc')->take(5)->get();

        return view('home', compact('wartaParoki', 'informasiGereja', 'profile'));
    }

    public function showProfile(){
        $profile = Profil::first();

        return view('profile.show', compact('profile'));
    }

    public function showWartaParoki($id){
        $wartaParoki = WartaParoki::find($id);

        if($wartaParoki === null){
            return abort(404);
        }

        return view('warta-paroki.show', compact('wartaParoki'));
    }
    public function showInformasi($id){
        $informasiGereja = InformasiGereja::find($id);

        if($informasiGereja === null){
            return abort(404);
        }

        return view('informasi-gereja.show', compact('informasiGereja'));
    }
}
