<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Uncomment jika ingin mengembalikan nama yang di sisipkan melalui path endpoint misal http://127.0.0.1:8000/pegawai/ilman
     */
    // public function index($nama)
    // {
    //     return $nama;
    // }

    public function index(Request $request)
    {
        return $request->segment(2);
    }

    public function formulir()
    {
        return view("formulir");
    }

    public function proses(Request $request)
    {
        //Acara 17
        // $nama = $request->input("nama");
        // $alamat = $request->input("alamat");

        // echo "Nama : " . $nama . " Alamat : " . $alamat;

        // Acara 18

        $messages = [
            "required"=> "Input :attribute wajib diisi",
            "min"=> "Input :attribute harus diisi minimal :min karakter!",
            "max"=> "Input :attribute harus diisi maksimal :max karakter!",
        ];

        $request->validate([
            "nama"=> "required|min:5|max:20",
            "alamat"=> "required|alpha",
        ], $messages);

        $nama = $request->input("nama");
        $alamat = $request->input("alamat");

        return "Nama : " . $nama . " Alamat : " . $alamat;
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
