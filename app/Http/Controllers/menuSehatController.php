<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\menuSehat;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Carbon;

class menuSehatController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $menuSehats = menuSehat::all();
        $menuSehats->map(function ($item) {
        $item->tanggal = Carbon::parse($item->tanggal)->format('d-m-Y');
        return $item;
        });

        $user = Auth::user();

        return view('admin.menuSehat.index', ['menuSehats' => $menuSehats], compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        $user = Auth::user();
        return view('admin.menuSehat.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'hari' => 'required',
            'tanggal' => 'required',
            'tipe' => 'required',
            'deskripsi' => 'required',
            'batch' => 'required',
        ]);

        // simpan
        menuSehat::create($request->all());
        return redirect()->route('menuSehat.index')->with('success', 'menu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(menuSehat $menuSehat)
    {
        //
        return view('admin.menuSehat.show', ['menuSehat' => $menuSehat]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menuSehat $menuSehat)
    {
        //
        $user = Auth::user();
        return view('admin.menuSehat.edit', ['menuSehat' => $menuSehat], compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, menuSehat $menuSehat)
    {
        //validasi
        $request->validate([
            'hari' => 'required',
            'tanggal' => 'required',
            'tipe' => 'required',
            'deskripsi' => 'required',
            'batch' => 'required'
        ]);

        //update 
        $menuSehat->update($request->all());

        // redirect
        return redirect()->route('menuSehat.index')->with('success', 'menu berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menuSehat $menuSehat)
    {
        $menuSehat->delete();
        return redirect()->route('menuSehat.index')->with('success', 'menu berhasil dihapus');
    }
}
