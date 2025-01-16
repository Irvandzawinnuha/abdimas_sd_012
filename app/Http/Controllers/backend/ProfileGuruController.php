<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class ProfileGuruController extends Controller
{
    public function index()
    {
        $data = Guru::all();
        return view('backend.dashboard', compact('data')); // Pastikan di dashboard menampilkan data guru
    }

    public function create()
    {
        return view('backend.create_guru'); // Menampilkan form tambah guru
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required|string|max:255',
        //     'nip' => 'required|numeric',
        //     'jabatan' => 'required|string|max:255',
        //     'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        // ]);
    
        $data = $request->only(['nama', 'nip', 'jabatan']);
    
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('guru_foto', 'public');
        }
    
        Guru::create($data);

        // dd($request);
        return redirect()->route('backend.dashboard')->with('success', 'Data guru berhasil ditambahkan.');
    }
    


    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('backend.edit_guru', compact('guru')); // Menampilkan form edit guru
    }



    public function update(Request $request, $id)
{
    $guru = Guru::findOrFail($id);

    $request->validate([
        'nama' => 'required|string|max:255',
        'nip' => 'required|string',
        'jabatan' => 'required|string|max:255',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $data = $request->only(['nama', 'nip', 'jabatan']);

    if ($request->hasFile('foto')) {
        if ($guru->foto) {
            \Storage::disk('public')->delete($guru->foto);
        }
        $data['foto'] = $request->file('foto')->store('guru_foto', 'public');
    }

    $guru->update($data);

    return redirect()->route('backend.dashboard')->with('success', 'Data guru berhasil diperbarui.');
}





public function destroy($id)
{
    $guru = Guru::findOrFail($id);

    if ($guru->foto) {
        \Storage::disk('public')->delete($guru->foto);
    }

    $guru->delete();

    return redirect()->route('backend.dashboard')->with('success', 'Data guru berhasil dihapus.');
}

}
