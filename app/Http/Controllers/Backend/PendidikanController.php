<?php

namespace App\Http\Controllers\Backend;

use App\Models\pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikan = pendidikan::all();
        return view("pages.pendidikan.index", compact("pendidikan"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.pendidikan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tingkatan' => 'required',
            'tahun_masuk' => 'required|digits:4|integer',
            'tahun_keluar' => 'nullable|digits:4|integer|gte:tahun_masuk',
        ]);

        pendidikan::create($request->all());
        // return redirect()->route('pendidikan.index')
        //     ->with('success', 'Data pendidikan berhasil ditambahkan.');

        // acara 22
        return response()->json([
            'status' => 'ok',
            'message'=> 'Pendidikan berhasil ditambahkan'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendidikan = pendidikan::findOrFail($id);
        return view("pages.pendidikan.edit", compact("pendidikan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'nama' => 'required|string|max:255',
        //     'tingkatan' => 'required',
        //     'tahun_masuk' => 'required|digits:4|integer',
        //     'tahun_keluar' => 'nullable|digits:4|integer|gte:tahun_masuk',
        // ]);

        pendidikan::find($id)->update($request->all());
        // return redirect()->route('pendidikan.index')
        //     ->with('success', 'Data pendidikan berhasil diperbarui.');

        // acara 22
        return response()->json([
            'status'=> 'ok',
            'message'=> 'Pendidikan berhasil diubah'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendidikan = pendidikan::findOrFail( $id );
        $pendidikan->delete();

        // return redirect()->route('pendidikan.index')
        // ->with('success','Data pendidikan berhasil dihapus');

        return response()->json([
            'status'=> 'ok',
            'message'=> 'Pendidikan berhasil dihapus'
        ], 200);
    }

    public function getAll()
    {
        $pendidikan = pendidikan::all();
        return Response::json($pendidikan, 200);
    }

    public function getPendidikanById($id)
    {
        $pendidikan = pendidikan::findOrFail($id);
        return Response::json($pendidikan,200);
    }
}
