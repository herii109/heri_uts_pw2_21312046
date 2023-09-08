<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use RealRashid\SweetAlert\Facades\Alert;

class perancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = Peran::all();
        return view('peran.index', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'cast' => 'required|numeric',
            'action' => 'required',
        ]);

        Peran::create([
            'nama' => $request->input('nama'),
            'cast' => $request->input('cast'),
            'action' => $request->input('action'),
        ]);

        Alert::success('Sukses', 'Peran berhasil ditambahkan.');

        return redirect('/peran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peran = Peran::findOrFail($id);
        return view('peran.show', compact('peran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peran = Peran::findOrFail($id);
        return view('peran.edit', compact('peran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'cast' => 'required|numeric',
            'action' => 'required',
        ]);

        $peran = Peran::findOrFail($id);
        $peran->update([
            'nama' => $request->input('nama'),
            'cast' => $request->input('cast'),
            'action' => $request->input('action'),
        ]);

        Alert::success('Sukses', 'Peran berhasil diperbarui.');

        return redirect('/peran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = Peran::findOrFail($id);
        $peran->delete();

        Alert::success('Sukses', 'Peran berhasil dihapus.');

        return redirect('/peran');
    }
}
