<?php

namespace App\Http\Controllers\api;
use App\Models\Departemen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartemenApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departemens = Departemen::paginate(10);
        return response()->json([
            'data'=>$departemens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departemen = Departemen::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
        ]);
        return response()->json([
            'data'=>$departemen
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Departemen $departemen)
    {
        return response()->json([
            'data'=>$departemen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departemen $departemen)
    {
        return view('dashboard.departemen.edit_departemen.index',[
            'departemen'=>$departemen
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departemen $departemen)
    {
        $departemen->nama = $request->nama;
        $departemen->kode = $request->kode;

        $departemen->save();

        return response()->json([
            'data'=>$departemen
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departemen $departemen)
    {
        Departemen::destroy($departemen->id);
        return response()->json([
            'message'=>'departemen dihapus'
        ]);
    }
}
