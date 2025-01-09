<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extracurricular; // Pastikan model sudah dibuat

class KegiatanEkstrakurikulerController extends Controller
{
    /**
     * Menampilkan halaman form tambah kegiatan ekstrakurikuler.
     */
    public function create()
    {
        return view('backend.create_kegiatan_ekstrakurikuler');
    }


    /**
     * Menyimpan data kegiatan ekstrakurikuler ke dalam database.
     */

    public function store(Request $request)
    {

        // Simpan file jika ada
        $filePath = "";
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/foto_kontribusi', $fileName, 'public'); // Menyimpan ke storage
        }

        // Simpan data ke database
        Extracurricular::create([
            'tanggal_publikasi' => $request->input('tanggal_publikasi'),
            'dibuat_oleh' => $request->input('dibuat_oleh'),
            'foto_kontribusi' => $filePath,
        ]);

        // Redirect ke halaman dashboard atau lainnya
        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan ekstrakurikuler berhasil ditambahkan.');
    }


    /**
     * Menampilkan halaman edit kegiatan ekstrakurikuler.
     */
    public function edit($id)
    {
        $kegiatan = Extracurricular::findOrFail($id); // Mengambil data berdasarkan id
        return view('backend.edit_kegiatan_ekstrakurikuler', ['kegiatan' => $kegiatan]);
    }

    /**
     * Memperbarui data kegiatan ekstrakurikuler.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'tanggal_publikasi' => 'required|date',
            'dibuat_oleh' => 'required|string|max:255',
            'file' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $kegiatan = Extracurricular::findOrFail($id);

        // Update file jika ada file baru
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/foto_kontribusi', $fileName, 'public'); // Menyimpan ke storage

            // Hapus file lama jika ada
            if ($kegiatan->foto_kontribusi) {
                \Storage::disk('public')->delete($kegiatan->foto_kontribusi);
            }

            $kegiatan->foto_kontribusi = $filePath;
        }

        // Update data lainnya
        $kegiatan->tanggal_publikasi = $request->input('tanggal_publikasi');
        $kegiatan->dibuat_oleh = $request->input('dibuat_oleh');
        $kegiatan->save();

        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan ekstrakurikuler berhasil diperbarui.');
    }

    
    /**
     * Menghapus data kegiatan ekstrakurikuler.
     */
    public function destroy($id)
    {
        $kegiatan = Extracurricular::findOrFail($id);

        // Hapus file foto jika ada
        if ($kegiatan->foto_kontribusi) {
            \Storage::disk('public')->delete($kegiatan->foto_kontribusi);
        }

        $kegiatan->delete();

        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan ekstrakurikuler berhasil dihapus.');
    }
}
