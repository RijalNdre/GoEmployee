<?php

namespace App\Http\Controllers\api;
use App\Models\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = Karyawan::paginate(10);
        return response()->json([
            'data'=>$karyawans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawan = Karyawan::create([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'noTelp' => $request->noTelp,
            'posisi' => $request->posisi,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        return response()->json([
            'data'=>$karyawan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        return response()->json([
            'data' => $karyawan
        ]);
    }

    public function edit(Karyawan $karyawan)
    {
        return view('dashboard.karyawan.edit_karyawan.index', [
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->nama = $request->nama;
        $karyawan->gender = $request->gender;
        $karyawan->alamat = $request->alamat;
        $karyawan->email = $request->email;
        $karyawan->noTelp = $request->noTelp;
        $karyawan->posisi = $request->posisi;
        $karyawan->divisi = $request->divisi;
        $karyawan->departemen = $request->departemen;

        $karyawan->save();

        return response()->json([
            'data'=>$karyawan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        Karyawan::destroy($karyawan->id);
        return response()->json([
            'message'=>'karyawan dihapus'
        ]);
    }
}
