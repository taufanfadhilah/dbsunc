<?php

namespace App\Http\Controllers;

use App\fase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fase = fase::all();        
        //return $perencanaan;
        return view('other/fase', compact('fase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fase = fase::all();
        return view('other.fase_add', compact('fase'));
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
            'fase' => 'required|min:2',
        ],);

        fase::create($request->all());

        return redirect('fase')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fase  $fase
     * @return \Illuminate\Http\Response
     */
    public function show(fase $fase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fase  $fase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fase = DB::table('fase')->where('id', $id)->first();
        return view('other.fase_edit', compact('fase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fase  $fase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'fase' => 'required|min:2',
        ],);

        DB::table('fase')->where('id', $id)
            ->update([
                'fase' => $request->fase,
                'desc' => $request->desc,
                
            ]);
        return redirect('fase')->with('status', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fase  $fase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('fase')->where('id', $id)->delete();
        return redirect('fase')->with('status', 'data berhasil dihapus!');
    }
}
