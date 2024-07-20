<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $items = Pasien::all();
        return view('master-pasien.index', ['items' => $items]);
    }

    public function create()
    {
        return view('master-pasien.form-pasien');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'nomor_telpon' => 'required',
        ]);
        Pasien::create($data);

        return redirect(route('master-pasien.index'))->with('success', 'Berhasil simpan data pasien');
    }
}
