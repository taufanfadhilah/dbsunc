<?php

namespace App\Http\Controllers;

use App\study;
use App\bangunan;
use App\bast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $study = study::with(['bangunan', 'bast'])->get();
        $study->count();
        return view('study/index', compact('study'));
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
        return view('study.create', compact(['bangunan', 'bast']));
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

        $study = $request->all();
        if($request->dokkontrak_pr){
            $study['dokkontrak_pr'] = Storage::disk('public')->put('dokkontrak_pr', $request->dokkontrak_pr); 
        }
        //return $study;
        $data = study::create($study);
        
        return redirect('study')->with('status', 'data berhasil diTambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(study $study)
    {
        $study->makeHidden(['bangunan_id', 'bast_id']);
        return view('study/show', compact('study'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(study $study)
    {
        $bangunan = bangunan::all();
        $bast = bast::all();
        return view('study/edit', compact('study', 'bangunan', 'bast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, study $study)
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

        study::where('id', $study->id)

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
            Storage::disk('public')->delete($study->dokkontrak_pr);
            $input['dokkontrak_pr'] = Storage::disk('public')->put('dokkontrak_pr', $request->dokkontrak_pr);
        }
        
        $study->update($input);
        return redirect('study')->with('status', 'data berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(study $study)
    {
        Storage::disk('public')->delete($study->dokkontrak_pr); 
        $study->delete();
        return redirect('study')->with('status', 'data berhasil diHapus!');
    }
}
