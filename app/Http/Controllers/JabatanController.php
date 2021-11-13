<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();        
        //return $perencanaan;
        return view('other/jabatan', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('other.jabatan_add', compact('jabatan'));
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
            'jabatan' => 'required|min:2',
        ],);

        Jabatan::create($request->all());
        return redirect('jabatan')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = DB::table('jabatan')->where('id', $id)->first();
        return view('other.jabatan_edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'jabatan' => 'required|min:2',
        ],);

        DB::table('jabatan')->where('id', $id)
            ->update([
                'jabatan' => $request->jabatan,
                'desc' => $request->desc,
                
            ]);
        return redirect('jabatan')->with('status', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jabatan')->where('id', $id)->delete();
        return redirect('jabatan')->with('status', 'data berhasil dihapus!');
    }
}
