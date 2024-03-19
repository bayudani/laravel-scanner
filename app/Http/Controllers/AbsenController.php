<?php

namespace App\Http\Controllers;

use App\Models\absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    //
    public function store(Request $request){
        $cek = absen::where([
            'member_id'=>$request->member_id,
            'tanggal'=>date('Y-m-d')
        ])->first();
        if ($cek) {
            return redirect('/absen')->with('gagal','anda sudah absen');            
        }
        absen::create([
            'member_id'=>$request->member_id,
            'tanggal'=>date('Y-m-d')
        ]);
        return redirect('/absen')->with('Sukses','Silahkan masuk');
    }

}
