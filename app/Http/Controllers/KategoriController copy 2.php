<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 

    return view('kategori.index', [
            'kategoris' => kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->validate([
            'nama_kategori' => 'required'       
        ]);

        kategori::create($data);

        return redirect()->route('kategori.index')->with('success', 'berhasil ditambah');
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
    public function edit(kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori )
    {
        $data = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori->update($data);

        return redirect()->route('kategori.index')->with('success', 'kategori diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'kategori dihapus');
    }
        
}
