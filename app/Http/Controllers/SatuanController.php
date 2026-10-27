<?php

namespace App\Http\Controllers;
use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    { 

    return view('satuan.index', [
            'satuans' => satuan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('satuan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->validate([
            'nama_satuan' => 'required',      
        ]);

        satuan::create($data);

        return redirect()->route('satuan.index')->with('success', 'brhasil ditambahkan');
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
    public function edit(satuan $satuan)
    {
        return view('satuan.edit', compact('satuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, satuan $satuan )
    {
        $data = $request->validate([
            'nama_satuan' => 'required'
        ]);

        $satuan->update($data);

        return redirect()->route('satuan.index')->with('success', 'satuan diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(satuan $satuan)
    {
        $satuan->delete();
        return redirect()->route('satuan.index')->with('success', 'satuan dihapus');
    }
}
