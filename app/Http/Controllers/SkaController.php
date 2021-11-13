<?php

namespace App\Http\Controllers;

use App\ska;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ska = ska::all();        
        //return $perencanaan;
        return view('other/ska', compact('ska'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ska = ska::all();
        return view('other.ska_add', compact('ska'));
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
            'ska' => 'required|min:2',
        ],);

        ska::create($request->all());

        return redirect('ska')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ska  $ska
     * @return \Illuminate\Http\Response
     */
    public function show(ska $ska)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ska  $ska
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $ska = DB::table('ska')->where('id', $id)->first();
        return view('other.ska_edit', compact('ska'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ska  $ska
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $request->validate([
            
            'ska' => 'required|min:2',
        ],);

        DB::table('ska')->where('id', $id)
            ->update([
                'ska' => $request->ska,
                'desc' => $request->desc,
                
            ]);
        return redirect('ska')->with('status', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ska  $ska
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('ska')->where('id', $id)->delete();
        return redirect('ska')->with('status', 'data berhasil dihapus!');
    }
}
