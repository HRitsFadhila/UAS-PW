<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrasiRequest;
use App\Http\Requests\UpdateRegistrasiRequest;
use App\Models\Registrasi;
use App\Models\Religion;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrasi = Registrasi::paginate(10);
        return view('pages.registrasi.index', ['registrasis' => $registrasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $religions = Religion::all(); // Ambil semua data agama dari tabel religions
        return view('pages.registrasi.create', compact('religions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrasiRequest $request)
{
    $validatedData = $request->validated();

    Registrasi::create([
        'nama' => $validatedData['nama'],
        'username' => $validatedData['username'],
        'email' => $validatedData['email'],
        'handphone' => $validatedData['handphone'],
        'tanggal_lahir' => $validatedData['tanggal_lahir'],
        'password' => $validatedData['password'],
        'jenis_kelamin' => $validatedData['jenis_kelamin'],
        'religion_id' => $validatedData['religion_id'],
        'biografi' => $validatedData['biografi'],
    ]);

    return redirect()->route('registrasi.index')->with('success', 'Data berhasil ditambahkan');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registrasi $registrasi)
    {
        return view('pages.registrasi.edit', compact('registrasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrasiRequest $request, Registrasi $registrasi)
    {
        $validatedData = $request->validated();

        $registrasi->update([
            'nama' => $validatedData['nama'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'handphone' => $validatedData['handphone'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'password' => $validatedData['password'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'religion_id' => $validatedData['religion_id'],
            'biografi' => $validatedData['biografi'],
        ]);

        return redirect()->route('registrasi.index')->with('success', 'Edit Registrasi Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registrasi $registrasi)
    {
        $registrasi->delete();
        return redirect()->route('registrasi.index')->with('success', 'Delete Registrasi successfully');
    }
}
