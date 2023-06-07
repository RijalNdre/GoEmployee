<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.divisi.index')->with([
            'divisis' => Divisi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $divisi = Divisi::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
        ]);
        return redirect()->route('divisi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Divisi $divisi)
    {
        return response()->json([
            'data'=>$divisi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        return view('dashboard.divisi.edit_divisi.index',[
            'divisi'=>$divisi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $divisi)
    {
        $divisi->nama = $request->nama;
        $divisi->kode = $request->kode;

        $divisi->save();

        return redirect()->route('divisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        Divisi::destroy($divisi->id);
        return redirect()->route('departemen.index')->with('success', 'Data berhasil dihapus');
    }
}
