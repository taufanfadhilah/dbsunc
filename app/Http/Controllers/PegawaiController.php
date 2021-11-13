<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = pegawai::with('role')->get();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = pegawai::all();
        $role = role::all();
        //return view('create', compact('lelang'));
        return view('pegawai.create', compact(['pegawai', 'role']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai = $request->all();
        
        if($request->ktp){
            $pegawai['ktp'] = Storage::disk('public')->put('dataktp', $request->ktp); 
        }
        if($request->npwp){
            $pegawai['npwp'] = Storage::disk('public')->put('datanpwp', $request->npwp); 
        }
        if($request->ijazah){
            $pegawai['ijazah'] = Storage::disk('public')->put('dataijazah', $request->ijazah); 
        }
        if($request->legalska){
            $pegawai['dokkeahlian'] = Storage::disk('public')->put('dokkeahlian', $request->legalska); 
        }
        
        $data = pegawai::create($pegawai);
        return redirect('pegawai')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //$pegawai->makeHidden(['ska_id', 'status_id']);
        return view('pegawai/show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        $role = role::all();
        return view('pegawai/edit', compact('pegawai', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //pegawai::where('id', $pegawai->id)

            // ->update([
            //     'nama' => $request->nama,
            //     'role_id' => $request->role_id,
            //     'tmpl' => $request->tmpl,
            //     'lahir' => $request->lahir,
            //     'alamat' => $request->alamat,
            //     'pendidikan' => $request->pendidikan,
            //     'tahun' => $request->tahun,
            //     // 'ktp' => $request->ktp,
            //     // 'npwp' => $request->npwp,
            //     // 'ijazah' => $request->ijazah,
            //     'keahlian' => $request->keahlian,
            //     'dokkeahlian' => $request->dokkeahlian,
            //     'desc' => $request->desc,
            // ]);

            $input = $request->all();
            //return $pegawai;
        if(isset($request->ktp)){
            Storage::disk('public')->delete($pegawai->ktp);
            $input['ktp'] = Storage::disk('public')->put('dataktp', $request->ktp);
        }
        if(isset($request->npwp)){
            Storage::disk('public')->delete($pegawai->npwp);
            $input['npwp'] = Storage::disk('public')->put('datanpwp', $request->npwp);
        }
        if(isset($request->ijazah)){
            Storage::disk('public')->delete($pegawai->ijazah);
            $input['ijazah'] = Storage::disk('public')->put('dataijazah', $request->ijazah);
        }
        if(isset($request->dokkeahlian)){
            Storage::disk('public')->delete($pegawai->dokkeahlian);
            $input['dokkeahlian'] = Storage::disk('public')->put('dokkeahlian', $request->dokkeahlian);
        }
        //return $input;
        $pegawai->update($input);
        return redirect('pegawai')->with('status', 'data berhasil diUpdate!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        Storage::disk('public')->delete($pegawai->ktp);
        Storage::disk('public')->delete($pegawai->npwp);
        Storage::disk('public')->delete($pegawai->ijazah);
        Storage::disk('public')->delete($pegawai->dokkeahlian);

        $pegawai->delete();
        return redirect('pegawai')->with('status', 'data berhasil diHapus!');
    }
}
