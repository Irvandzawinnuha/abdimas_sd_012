<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extracurricular; // Pastikan model sudah dibuat

class KegiatanEkstrakurikulerController extends Controller
{

        public function index()
    {
        $dataEkskul = Extracurricular::all();
        return view('backend.dashboard', compact('dataEkskul'));
    }

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
        if ($request->hasFile('foto')) {
            $filePath = $request->file('foto')->store('ekstrakurikuler', 'public');
        }
        // Simpan data ke database
        Extracurricular::create([
            'created_at' => $request->input('created_at'),
            'CreatedBy' => $request->input('CreatedBy'),
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

        $kegiatan = Extracurricular::findOrFail($id);
        $filePath = '';
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

        $filePath = "";
        if ($request->hasFile('foto')) {
            $filePath = $request->file('foto')->store('ekstrakurikuler', 'public');
        }
        
        $kegiatan->update([
            'created_at' => $request->input('created_at'),
            'CreatedBy' => $request->input('CreatedBy'),
            'foto_kontribusi' => $filePath . ''
        ]);



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
