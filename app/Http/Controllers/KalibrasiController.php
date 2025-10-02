<?php

namespace App\Http\Controllers;

use App\Models\Kalibrasi;
use Illuminate\Http\Request;

class KalibrasiController extends Controller
{
    /**
     * Tampilkan daftar permohonan kalibrasi (opsional).
     */
    public function index()
    {
        // Ambil hanya data kalibrasi milik user yang sedang login
        $kalibrasis = Kalibrasi::where('user_id', auth()->id())
            ->latest()
            ->paginate(10);

        return view('components.kalibrasi.index', compact('kalibrasis'));
    }

    /**
     * Tampilkan form permohonan kalibrasi.
     */
    public function create()
    {
        return view('components.kalibrasi.create');
    }

    /**
     * Simpan permohonan kalibrasi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemohon'   => 'required|string|max:255',
            'instansi'       => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'telepon'        => 'required|string|max:30',
            'nama_alat'      => 'required|string|max:255',
            'merk'           => 'required|string|max:255',
            'serial_number'  => 'required|string|max:255',
            'keterangan'     => 'nullable|string',
        ]);

        Kalibrasi::create([
            'nama_pemohon'  => $request->nama_pemohon,
            'instansi'      => $request->instansi,
            'email'         => $request->email,
            'telepon'       => $request->telepon,
            'nama_alat'     => $request->nama_alat,
            'merk'          => $request->merk,
            'serial_number' => $request->serial_number,
            'keterangan'    => $request->keterangan,
            'user_id'       => auth()->id(), // <-- tambahkan ini
        ]);

        return redirect()->route('kalibrasi.create')->with('status', 'Permohonan kalibrasi berhasil dikirim!');
    }

    /**
     * Tampilkan detail permohonan kalibrasi.
     */
    public function show(Kalibrasi $kalibrasi)
    {
        return view('components.kalibrasi.show', compact('kalibrasi'));
    }

    /**
     * Tampilkan form edit permohonan kalibrasi.
     */
    public function edit(Kalibrasi $kalibrasi)
    {
        return view('components.kalibrasi.edit', compact('kalibrasi'));
    }

    /**
     * Update permohonan kalibrasi.
     */
    public function update(Request $request, Kalibrasi $kalibrasi)
    {
        $request->validate([
            'nama_pemohon'   => 'required|string|max:255',
            'instansi'       => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'telepon'        => 'required|string|max:30',
            'nama_alat'      => 'required|string|max:255',
            'merk'           => 'required|string|max:255',
            'serial_number'  => 'required|string|max:255',
            'keterangan'     => 'nullable|string',
        ]);

        $kalibrasi->update($request->all());

        return redirect()->route('kalibrasi.index')->with('status', 'Data permohonan kalibrasi berhasil diperbarui!');
    }

    /**
     * Hapus permohonan kalibrasi.
     */
    public function destroy(Kalibrasi $kalibrasi)
    {
        $kalibrasi->delete();
        return redirect()->route('kalibrasi.index')->with('status', 'Data permohonan kalibrasi berhasil dihapus!');
    }
}
