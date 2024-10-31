<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data peminjaman
        $peminjaman = Peminjaman::all();
        
        // Mengembalikan view dengan data peminjaman
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('peminjaman.create');
    }


    public function store(Request $request)
{
    try {
        // Validasi input
        $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'alamat_peminjam' => 'required|string|max:255',
            'no_hp' => 'required|string|min:6|max:15',
            'tgl_minjam' => 'required|date',
            'tgl_kembali' => 'required|date|after_or_equal:tgl_minjam',
            'status' => 'required|string|max:255', // Sesuaikan max jika perlu
        ]);

        // Simpan data peminjaman
        $peminjaman = Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'alamat_peminjam' => $request->alamat_peminjam,
            'no_hp' => $request->no_hp,
            'tgl_minjam' => $request->tgl_minjam,
            'tgl_kembali' => $request->tgl_kembali,
            'status' => $request->status,
        ]);

        // Cek apakah peminjaman berhasil disimpan
        if ($peminjaman) {
            dd('Peminjaman berhasil disimpan: true');
        } else {
            dd('Peminjaman berhasil disimpan: false');
        }
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
    }
}




    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman)
    {
        //
    }
}
