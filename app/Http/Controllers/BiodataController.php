<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreBiodataRequest;
use App\Http\Requests\UpdateBiodataRequest;
use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $biodata = Biodata::paginate(10);
        return view('pages.biodata.index', ['biodatas'=> $biodata]);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create()
     {
         return view('pages.biodata.create');
     }
    public function store(StoreBiodataRequest $request)
    {
        Biodata::create([
            'saudara_sd' => $request->input('saudara_sd', 0),
            'saudara_smp' => $request->input('saudara_smp', 0),
            'saudara_sma' => $request->input('saudara_sma', 0),

            ]);
            return redirect(route('biodata.index'))->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Biodata $biodata)
    {
        return view('pages.Biodata.edit', compact('biodata'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBiodataRequest $request, $biodatum)
{
    $validatedData = $request->validated();

    $biodata = Biodata::findOrFail($biodatum);
    $biodata->update([
        'saudara_sd' => $validatedData['saudara_sd'],
        'saudara_smp' => $validatedData['saudara_smp'],
        'saudara_sma' => $validatedData['saudara_sma'],
    ]);

    return redirect()->route('biodata.index')->with('success', 'Edit Registrasi Successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
