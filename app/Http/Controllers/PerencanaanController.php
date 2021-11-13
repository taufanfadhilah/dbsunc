<?php

namespace App\Http\Controllers;

use App\Perencanaan;
use App\bangunan;
use App\bast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PerencanaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $perencanaan = Perencanaan::with(['bangunan', 'bast'])->get();
        $perencanaan->count();
        return view('perencanaan/index', compact('perencanaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bangunan = bangunan::all();
        $bast = bast::all();
        return view('perencanaan.create', compact(['bangunan', 'bast']));
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
            'nama_paket' => 'required|min:2',
            'bidang' => 'required|min:2',
            'bangunan_id' => 'required',
            'lokasi' => 'required|min:2',
            'nama' => 'required|min:2',
            'alamat' => 'required|min:2',
            'nomor' => 'required',
            'nilai' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'selesai_BAP' => 'required',
            'bast_id' => 'required',
        ],);

        $perencanaan = $request->all();
        if($request->dokkontrak_pr){
            $perencanaan['dokkontrak_pr'] = Storage::disk('public')->put('dokkontrak_pr', $request->dokkontrak_pr); 
        }
        //return $perencanaan;
        $data = Perencanaan::create($perencanaan);
        
        return redirect('perencanaan')->with('status', 'data berhasil diTambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perencanaan  $perencanaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perencanaan $perencanaan)
    {
        $perencanaan->makeHidden(['bangunan_id', 'bast_id']);
        return view('perencanaan/show', compact('perencanaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perencanaan  $perencanaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perencanaan $perencanaan)
    {
        $bangunan = bangunan::all();
        $bast = bast::all();
        return view('perencanaan/edit', compact('perencanaan', 'bangunan', 'bast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perencanaan  $perencanaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perencanaan $perencanaan)
    {
        $request->validate([
            'nama_paket' => 'required|min:2',
            'bidang' => 'required|min:2',
            'bangunan_id' => 'required',
            'lokasi' => 'required|min:2',
            'nama' => 'required|min:2',
            'alamat' => 'required|min:2',
            'nomor' => 'required',
            'nilai' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'selesai_BAP' => 'required',
            'bast_id' => 'required',
        ],);

        Perencanaan::where('id', $perencanaan->id)

            ->update([
                'nama_paket' => $request->nama_paket,
                'bidang' => $request->bidang,
                'bangunan_id' => $request->bangunan_id,
                'lokasi' => $request->lokasi,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nomor' => $request->nomor,
                'nilai' => $request->nilai,
                'mulai' => $request->mulai,
                'selesai' => $request->selesai,
                'selesai_BAP' => $request->selesai_BAP,
                'bast_id' => $request->bast_id,

            ]);

        $input = $request->all();
        if ($request->dokkontrak_pr) {
            Storage::disk('public')->delete($perencanaan->dokkontrak_pr);
            $input['dokkontrak_pr'] = Storage::disk('public')->put('dokkontrak_pr', $request->dokkontrak_pr);
        }
        
        $perencanaan->update($input);
        return redirect('perencanaan')->with('status', 'data berhasil diUpdate!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perencanaan  $perencanaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perencanaan $perencanaan)
    {
        //$perencanaan->delete();

        Storage::disk('public')->delete($perencanaan->dokkontrak_pr); 
        $perencanaan->delete();
        return redirect('perencanaan')->with('status', 'data berhasil diHapus!');
    }
}
