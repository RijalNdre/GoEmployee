<?php

namespace App\Http\Controllers\api;
use App\Models\Divisi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivisiApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisis = Divisi::paginate(10);
        return response()->json([
            'data'=>$divisis
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
        return response()->json([
            'data'=>$divisi
        ]);
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

        return response()->json([
            'data'=>$divisi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        Divisi::destroy($divisi->id);
        return response()->json([
            'message'=>'divisi dihapus'
        ]);
    }
}
