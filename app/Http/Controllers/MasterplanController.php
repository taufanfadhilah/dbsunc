<?php

namespace App\Http\Controllers;

use App\Masterplan;
use App\bangunan;
use App\bast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MasterplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masterplan = Masterplan::with(['bangunan', 'bast'])->get();
        $masterplan->count();
        return view('masterplan/index', compact('masterplan'));
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
        return view('masterplan.create', compact(['bangunan', 'bast']));
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

        $masterplan = $request->all();
        if($request->dokkontrak_mp){
            $masterplan['dokkontrak_mp'] = Storage::disk('public')->put('dokkontrak_mp', $request->dokkontrak_mp); 
        }
        $data = Masterplan::create($masterplan);

        return redirect('masterplan')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Masterplan  $masterplan
     * @return \Illuminate\Http\Response
     */
    public function show(Masterplan $masterplan)
    {
        $masterplan->makeHidden(['bangunan_id', 'bast_id']);
        return view('masterplan/show', compact('masterplan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Masterplan  $masterplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Masterplan $masterplan)
    {
        $bangunan = bangunan::all();
        $bast = bast::all();
        return view('masterplan/edit', compact('masterplan', 'bangunan', 'bast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Masterplan  $masterplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masterplan $masterplan)
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

        Masterplan::where('id', $masterplan->id)

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
            if ($request->dokkontrak_mp) {
                Storage::disk('public')->delete($masterplan->dokkontrak_mp);
                $input['dokkontrak_mp'] = Storage::disk('public')->put('dokkontrak_mp', $request->dokkontrak_mp);
            }
            
            $masterplan->update($input);
        return redirect('masterplan')->with('status', 'data berhasil diUpdate!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Masterplan  $masterplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masterplan $masterplan)
    {
        Storage::disk('public')->delete($masterplan->dokkontrak_mp); 
        $masterplan->delete();
        return redirect('masterplan')->with('status', 'data berhasil diHapus!');
    }
}
