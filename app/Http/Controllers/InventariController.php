<?php

namespace App\Http\Controllers;

use App\Models\Inventari;
use Illuminate\Http\Request;

class InventariController extends Controller
{
    public function contoh(){
        return view('layouts.blabla');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $inventaris = Inventari::Where('name', 'like', '%' . $request->search . '%')->orderBy('name', 'asc')->simplePaginate(5);
        return view('inventari.index', compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventari.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required|max:100',
                'price' => 'required|numeric',
                'stock' => 'required|numeric'
            ], [
                'name.required' => 'Nama barang harus diisi!',
                'price.required' => 'Harga barang harus diisi!',
                'stock.required' => 'Stok barang harus diisi!',
                'name.max' => 'Nama barang maksimal 100 karakter!',
                'price.numeric' => 'Harga barang harus berupa angka!',
                'price.max' => 'Harga barang maksimal 100 karakter!',
                'stock.numeric' => 'Stok barang harus berupa angka!',
            ]);
            $proses = Inventari::create([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock
            ]);
    
            if ($proses) {
                return redirect()->route('inventari.home')->with('success', 'Berhasil mengubah data Barang!');
            } else {
                return redirect()->back()->with('failed', 'Gagal mengubah data Barang!');
            }
        }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Inventari::findOrFail($id);

        //render view with post
        return view('inventari.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inventari = Inventari::find($id);
        
        return view('inventari.edit', compact('inventari'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:15',
            'price'=>'required|numeric',
            'stock'=>'required|numeric',
        ], [
            'name.required' => 'Nama Barang Wajib Diisi !',
            'name.min' => 'Nama Barang Minimal 5 Karakter !',
            'name.max' => 'Nama Barang Minimal 15 Karakter !',
            'price.required' => 'Harga Barang Wajib Diisi !',
            'price.numeric' => 'Harga Harga Wajib Berupa Angka !',
            'stock.required' => 'Stock Barang Wajib Diisi !',
        ]);

        $inventariBefore = Inventari::where('id', $id)->first();

        if ((int)$request->stock < (int)$inventariBefore->stock) {
            return redirect()->back()->with('failed', 'Stock baru tidak boleh kurang dari stock sebelumnya !');
        }

        $proses = $inventariBefore->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        if ($proses) {
            return redirect()->route('inventari.home')->with('success', 'Data Barang Berhasil Diubah !');
        } else {
            return redirect()->route('inventari.edit', $id)->with('failed', 'Gagal Mengubah Data Barang !');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Inventari::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'berhasil menghapus data');
    }
}
