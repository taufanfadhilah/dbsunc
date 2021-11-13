<?php

namespace App\Http\Controllers;

use App\Pengawasan;
use App\bangunan;
use App\bast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengawasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengawasan = Pengawasan::with(['bangunan', 'bast'])->get();
        $pengawasan->count();
        return view('pengawasan/index', compact('pengawasan'));
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
        return view('pengawasan.create', compact(['bangunan', 'bast']));
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

        $pengawasan = $request->all();
        if($request->dokkontrak_pw){
            $pengawasan['dokkontrak_pw'] = Storage::disk('public')->put('dokkontrak_pw', $request->dokkontrak_pw); 
        }
        //return $pengawasan;
        $data = Pengawasan::create($pengawasan);
        return redirect('pengawasan')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengawasan  $pengawasan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengawasan $pengawasan)
    {
        $pengawasan->makeHidden(['bangunan_id', 'bast_id']);
        return view('pengawasan/show', compact('pengawasan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengawasan  $pengawasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengawasan $pengawasan)
    {
        $bangunan = bangunan::all();
        $bast = bast::all();
        return view('pengawasan/edit', compact('pengawasan', 'bangunan', 'bast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengawasan  $pengawasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengawasan $pengawasan)
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

        Pengawasan::where('id', $pengawasan->id)

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
        if ($request->dokkontrak_pw) {
            Storage::disk('public')->delete($pengawasan->dokkontrak_pw);
            $input['dokkontrak_pw'] = Storage::disk('public')->put('dokkontrak_pw', $request->dokkontrak_pw);
        }

        $pengawasan->update($input);
        return redirect('pengawasan')->with('status', 'data berhasil diUpdate!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengawasan  $pengawasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengawasan $pengawasan)
    {
        Storage::disk('public')->delete($pengawasan->dokkontrak_pw); 
        $pengawasan->delete();
        return redirect('pengawasan')->with('status', 'data berhasil diHapus!');
    }
}
