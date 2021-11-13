<?php

namespace App\Http\Controllers;

use App\peralatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peralatan = peralatan::all();        
        return view('peralatan/index', compact('peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peralatan = peralatan::all();
        return view('peralatan.create', compact('peralatan'));
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
            'nama' => 'required|min:2',
            'pembelian' => 'required',
            'harga' => 'required',
        ],);

        $peralatan = $request->all();
        if($request->imgalat){
            $peralatan['imgalat'] = Storage::disk('public')->put('imgalat', $request->imgalat); 
        }
        $data = peralatan::create($peralatan);

        return redirect('peralatan')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function show(peralatan $peralatan)
    {
        $peralatan->makeHidden(['id']);
        return view('peralatan/show', compact('peralatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function edit(peralatan $peralatan)
    {
        $peralatan = DB::table('peralatan')->where('id', $peralatan->id)->first();
        return view('peralatan.edit', compact('peralatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peralatan $peralatan)
    {
        $request->validate([
            
            'nama' => 'required|min:2',
            'pembelian' => 'required',
            'harga' => 'required',
            
        ],);

        DB::table('peralatan')->where('id', $peralatan->id)
            ->update([
                'nama' => $request->nama,
                'pembelian' => $request->pembelian,
                'harga' => $request->harga,
                'desc' => $request->desc,
            ]);

            $input = $request->all();
        if ($request->imgalat) {
            Storage::disk('public')->delete($peralatan->imgalat);
            $input['imgalat'] = Storage::disk('public')->put('imgalat', $request->imgalat);
        }
        
        $peralatan->update($input);
        return redirect('peralatan')->with('status', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peralatan $peralatan)
    {
        Storage::disk('public')->delete($peralatan->imgalat); 
        $peralatan->delete();
        return redirect('peralatan')->with('status', 'data berhasil dihapus!');
    }
}
