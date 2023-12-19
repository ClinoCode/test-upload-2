<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galery;
use Illuminate\Support\Str;
use App\Models\menuSehat;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class galeryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeries = galery::all();
        $user = Auth::user();
        return view('admin.galeri.index', ['galeries' => $galeries], compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $hari = menuSehat::select('hari')->distinct()->pluck('hari');
        $user = Auth::user();
        return view('admin.galeri.create', compact('hari', 'user'));
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'tipe' => 'required',
            'gambar' => 'required|image|mimes:jpg,png|max:2000'
        ]);

        $gambar = $request->gambar;
        $slug = Str::slug($gambar->getClientOriginalName());
        $new_gambar = time() . '_' . $slug;
        $gambar->move('uploads/menu/', $new_gambar);

        $galeri = new galery;
        $galeri->hari = $request->hari;
        $galeri->tipe = $request->tipe;
        $galeri->gambar = 'uploads/menu/' . $new_gambar;
        $galeri->save();



        return redirect()->route('galery.index');
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
    public function edit(galery $galery)
    {
        $user = Auth::user();
        return view('admin.galeri.edit', ['galery' => $galery], compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi
        $request->validate([
            'hari' => 'required',
            'tipe' => 'required',
        ]);

        $galeri = galery::find($id);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:jpg,png|max:2000'
            ]);
            File::delete($galeri->gambar);
            $gambar = $request->gambar;
            $slug = Str::slug($gambar->getClientOriginalName());
            $new_gambar = time() . '_' . $slug;
            $gambar->move('uploads/menu/', $new_gambar);
            $galeri->gambar = 'uploads/menu/' . $new_gambar;
            $galeri->save();
        }



        $galeri->hari = $request->hari;
        $galeri->tipe = $request->tipe;
        $galeri->save();

        //update
        // redirect
        return redirect()->route('galery.index')->with('success', 'menu berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galery = galery::find($id);
        File::delete($galery->gambar);
        $galery->delete();
        return redirect()->route('galery.index')->with('success', 'menu berhasil dihapus');
    }
}
