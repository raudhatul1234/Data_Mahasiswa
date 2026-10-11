<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan semua data mahasiswa.
     */
    public function index(Request $request)
{
    $search = $request->search;

    $mahasiswa = Mahasiswa::query()

        ->when($search, function ($query) use ($search) {

            $query->where('nim', 'like', '%' . $search . '%')

                  ->orWhere('nama', 'like', '%' . $search . '%')

                  ->orWhere('jurusan', 'like', '%' . $search . '%')

                  ->orWhere('email', 'like', '%' . $search . '%');

        })

        ->latest()

        ->get();

    $totalMahasiswa = Mahasiswa::count();

    return view(
        'mahasiswa.index',
        compact(
            'mahasiswa',
            'totalMahasiswa',
            'search'
        )
    );
}


    /**
     * Menampilkan form tambah mahasiswa.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }


    /**
     * Menyimpan data mahasiswa baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:mahasiswas,email',
            'no_hp' => 'nullable|string|max:20',
        ]);


        Mahasiswa::create($validated);


        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }


    /**
     * Menampilkan detail mahasiswa.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }


    /**
     * Menampilkan form edit mahasiswa.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }


    /**
     * Mengupdate data mahasiswa.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:mahasiswas,email,' . $mahasiswa->id,
            'no_hp' => 'nullable|string|max:20',
        ]);


        $mahasiswa->update($validated);


        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }


    /**
     * Menghapus data mahasiswa.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();


        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}