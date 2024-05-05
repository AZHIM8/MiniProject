<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Barang List';

        return view('barang.index', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $pageTitle = 'Create Barang';

            return view('barang.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka',
            'kode' => 'Isi :attribute dengan unik'
            ];

            $validator = Validator::make($request->all(), [
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'hargabarang' => 'required|numeric',
            'satuanbarang' => 'required',
            'kodesatuan' => 'required|kode',
            'namasatuan' => 'required',
            'deskripsibarang' => 'required'
            ], $messages);

            if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            }

            $barang = new Barang;
            $barang->kodebarang = $request->kodebarang;
            $barang->namabarang = $request->namabarang;
            $barang->hargabarang = $request->hargabarang;
            $barang->satuanbarang = $request->satuanbarang;
            $barang->kodesatuan = $request->kodesatuan;
            $barang->namasatuan = $request->namasatuan;
            $barang->deskripsibarang = $request->deskripsibarang;

            $barang->save();

            return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Barang.index';

        // // ELOQUENT
        // $Barang = Barang::find($id);

        // return view('Barang.show', compact('pageTitle', 'Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        $barang = Barang::findOrFail($id);

        return view('barang.edit', compact('pageTitle', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->kodebarang = $request->kodebarang;
        $barang->namabarang = $request->namabarang;
        $barang->hargabarang = $request->hargabarang;
        $barang->deskripsibarang = $request->deskripsibarang;
        $barang->satuanbarang = $request->satuanbarang;
        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index');
    }
}
