<?php

namespace App\Http\Controllers;

use App\legal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legal = legal::all();        
        return view('legal/index', compact('legal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('legal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $legal = $request->all();
        if($request->dokfile){
            $legal['dokfile'] = Storage::disk('public')->put('dokfile', $request->dokfile); 
        }
        // return $legal;
        $data = legal::create($legal);
        
        return redirect('legal')->with('status', 'data berhasil ditambah!');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\legal  $legal
     * @return \Illuminate\Http\Response
     */
    public function show(legal $legal)
    {
        $legal->makeHidden(['id']);
        // $legal = Storage::get('\storage\app/public/dokfile');
        return view('legal/show', compact('legal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\legal  $legal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $legal = legal::find($id);
        return view('legal.edit', compact('legal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\legal  $legal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, legal $legal)
    {
        // $dokumen = $request->dokumen;
        // $berlaku = $request->berlaku;
        // $habis = $request->habis;
        // $instansi = $request->instansi;
        // $desc = $request->desc;
        // // $dokfile = $request->file('dokfile');
        // // $fileName = time().'.'.$dokfile->extension();
        // // $dokfile->move(public_path('file'),$fileName);

        // $legal = legal::find($request->id);
        // $legal->dokumen = $dokumen;
        // $legal->berlaku = $berlaku;
        // $legal->habis = $habis;
        // $legal->instansi = $instansi;
        // $legal->desc = $desc;
        // // $legal->doklife = $fileName;

        // $legal->save();

        
        $input = $request->all();
        if($request->dokfile){
            Storage::disk('public')->delete($legal->dokfile); 
            $input['dokfile'] = Storage::disk('public')->put('dokfile', $request->dokfile);
        }
        // return $legal;
        $legal->update($input);

        return redirect('legal')->with('status', 'data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\legal  $legal
     * @return \Illuminate\Http\Response
     */
    public function destroy(legal $legal)
    {
        Storage::disk('public')->delete($legal->dokfile); 
        $legal->delete();
        return redirect('legal')->with('status', 'data berhasil dihapus!');
    }
}
