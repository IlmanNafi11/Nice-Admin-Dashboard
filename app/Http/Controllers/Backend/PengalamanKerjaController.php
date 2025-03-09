<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\PengalamanKerja;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PengalamanKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //jika menggunakan query builder
        // $pengalaman = DB::table('pengalaman_kerja')->get();

        $pengalaman = PengalamanKerja::all(); // menggunakan eloquent
        return view("pages.PengalamanKerja.index", compact('pengalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.PengalamanKerja.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tahun_masuk' => 'required|digits:4|integer',
            'tahun_keluar' => 'nullable|digits:4|integer|gte:tahun_masuk',
        ]);

        // jika menggunakan query builder
        // DB::table('pengalaman_kerja')->insert([
        //     'nama_perusahaan' => $request->nama,
        //     'jabatan' => $request->jabatan,
        //     'tahun_masuk' => $request->tahun_masuk,
        //     'tahun_keluar' => $request->tahun_keluar,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        PengalamanKerja::create($request->all()); // menggunakan eloquent

        return redirect()->route('pengalaman-kerja.index')
            ->with('success', 'Data pengalaman kerja berhasil ditambahkan.');
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
        // jika menggunakan query builder
        // $pengalaman = DB::table('pengalaman_kerja')->where('id', $id)->first();

        $pengalaman = PengalamanKerja::findOrFail($id); // menggunakan eloquent
        return view("pages.PengalamanKerja.edit", compact('pengalaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tahun_masuk' => 'required|digits:4|integer',
            'tahun_keluar' => 'nullable|digits:4|integer|gte:tahun_masuk',
        ]);

        // menggunakan query builder
        // DB::table('pengalaman_kerja')->where('id', $id)->update([
        //     'nama_perusahaan' => $request->nama,
        //     'jabatan' => $request->jabatan,
        //     'tahun_masuk' => $request->tahun_masuk,
        //     'tahun_keluar' => $request->tahun_keluar,
        //     'updated_at' => now(),
        // ]);

        $pengalaman = PengalamanKerja::findOrFail($id); // jika menggunakan eloquent
        $pengalaman->update($request->all());

        return redirect()->route('pengalaman-kerja.index')
            ->with('success', 'Data pengalaman kerja berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // jika menggunakan query builder
        // DB::table('pengalaman_kerja')->where('id', $id)->delete();

        $pengalaman = PengalamanKerja::findOrFail($id); // menggunakan eloquent
        $pengalaman->delete();

        return redirect()->route('pengalaman-kerja.index')
            ->with('success', 'Data pengalaman kerja berhasil dihapus.');
    }
}
