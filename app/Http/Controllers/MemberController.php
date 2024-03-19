<?php

namespace App\Http\Controllers;

use App\Models\member;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
// use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = member::all();
        return view('index', compact('members'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $number = mt_rand(100000, 999999);

        if ($this->memberQodeExist($number)) {
            $number = mt_rand(100000, 999999);
        }
        $request['Member_qode'] = $number; // Ubah variabel menjadi 'Member_code' yang benar
        member::create($request->all()); // Ganti method 'crate' menjadi 'create'

        return redirect('/');
    }

    public function memberQodeExist($number)
    {
        return member::whereMemberQode($number)->exists();
    }

    public function show($id)
    {
        // get post dari id
        $member = member::find($id);
        // $member->created_at = Carbon::parse($member->created_at,'Asia/Jakarta')->locale('id')->translatedFormat('d F Y');
        // $member->expired_at = Carbon::parse($member->created_at)->addDays(30)->locale('id')->translatedFormat('d F Y');

        // render view

        return view('show', compact('member'));
    }

    public function cetak($id)
    {
        $data['member'] = member::find($id);
        $data['created_at'] = Carbon::parse($data['member']->created_at)->locale('id')->translatedFormat('d F Y');
        $data['expired_at'] =  Carbon::now()->addDay(30)->locale('id')->translatedFormat('d F Y');

        $pdf = Pdf::loadView('pdf.cetak', $data);
        return $pdf->download('kartu_member.pdf');
    }
}
