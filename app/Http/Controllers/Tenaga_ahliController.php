<?php

namespace App\Http\Controllers;

use App\tenaga_ahli;
use App\ska;
use App\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Tenaga_ahliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenaga_ahli = tenaga_ahli::with(['ska', 'status'])->get();
        //return $perencanaan;
        $tenaga_ahli->count();
        return view('tenaga_ahli/index', compact('tenaga_ahli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ska = ska::all();
        $status = status::all();
        return view('tenaga_ahli.create', compact(['ska', 'status']));
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
            'nik' => 'required|min:2',
            'tmptl' => 'required|min:2',
            'lahir' => 'required',
            'pendidikan' => 'required|min:2',
            'lulus' => 'required',
            'ska_id' => 'required',
            
            'status_id' => 'required',
        ],);

        $tenaga_ahli = $request->all();
        return $tenaga_ahli;
        if($request->ktp){
            $tenaga_ahli['ktp'] = Storage::disk('public')->put('dataktp', $request->ktp); 
        }
        if($request->npwp){
            $tenaga_ahli['npwp'] = Storage::disk('public')->put('datanpwp', $request->npwp); 
        }
        if($request->ijazah){
            $tenaga_ahli['ijazah'] = Storage::disk('public')->put('dataijazah', $request->ijazah); 
        }
        // if($request->legalska){
        //     $tenaga_ahli['legalska'] = Storage::disk('public')->put('dataska', $request->legalska); 
        // }
        // if($request->legalska2){
        //     $tenaga_ahli['legalska'] = Storage::disk('public')->put('dataska', $request->legalska2); 
        // }
        // if($request->legalska3){
        //     $tenaga_ahli['legalska'] = Storage::disk('public')->put('dataska', $request->legalska3); 
        // }
        
        $data = tenaga_ahli::create($tenaga_ahli);

        return redirect('tenaga_ahli')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tenaga_ahli  $tenaga_ahli
     * @return \Illuminate\Http\Response
     */
    public function show(tenaga_ahli $tenaga_ahli)
    {
        $tenaga_ahli->makeHidden(['ska_id', 'status_id']);
        return view('tenaga_ahli/show', compact('tenaga_ahli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tenaga_ahli  $tenaga_ahli
     * @return \Illuminate\Http\Response
     */
    public function edit(tenaga_ahli $tenaga_ahli)
    {
        $ska = ska::all();
        $status = status::all();
        return view('tenaga_ahli/edit', compact('tenaga_ahli', 'ska', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tenaga_ahli  $tenaga_ahli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tenaga_ahli $tenaga_ahli)
    {
        $request->validate([
            'nama' => 'required|min:2',
            'nik' => 'required|min:2',
            'tmptl' => 'required|min:2',
            'lahir' => 'required',
            'pendidikan' => 'required|min:2',
            'lulus' => 'required',
            // 'ska_id' => 'required',
            // 'berlaku' => 'required',
            'status_id' => 'required',
        ],);

        tenaga_ahli::where('id', $tenaga_ahli->id)

            ->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'tmptl' => $request->tmptl,
                'lahir' => $request->lahir,
                'alamat' => $request->alamat,
                'ktp' => $request->ktp,
                'npwp' => $request->npwp,
                'pendidikan' => $request->pendidikan,
                'lulus' => $request->lulus,
                'ijazah' => $request->ijazah,
                'ska_id' => $request->ska_id,
                'legalska' => $request->legalska,
                'berlaku' => $request->berlaku,
                'status_id' => $request->status_id,
                

            ]);

            $input = $request->all();
        if ($request->ktp) {
            Storage::disk('public')->delete($tenaga_ahli->ktp);
            $input['ktp'] = Storage::disk('public')->put('dataktp', $request->ktp);
        }
        if ($request->npwp) {
            Storage::disk('public')->delete($tenaga_ahli->npwp);
            $input['npwp'] = Storage::disk('public')->put('datanpwp', $request->npwp);
        }
        if ($request->ijazah) {
            Storage::disk('public')->delete($tenaga_ahli->ijazah);
            $input['ijazah'] = Storage::disk('public')->put('dataijazah', $request->ijazah);
        }
        // if ($request->legalska) {
        //     Storage::disk('public')->delete($tenaga_ahli->legalska);
        //     $input['legalska'] = Storage::disk('public')->put('dataska', $request->legalska);
        // }
        
        $tenaga_ahli->update($input);
        return redirect('tenaga_ahli')->with('status', 'data berhasil diUpdate!');
        
        // return $request;
        //return redirect('tenaga_ahli')->with('status', 'data berhasil diUpdate!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tenaga_ahli  $tenaga_ahli
     * @return \Illuminate\Http\Response
     */
    public function destroy(tenaga_ahli $tenaga_ahli)
    {
        Storage::disk('public')->delete($tenaga_ahli->ktp);
        Storage::disk('public')->delete($tenaga_ahli->npwp);
        Storage::disk('public')->delete($tenaga_ahli->ijazah);
        Storage::disk('public')->delete($tenaga_ahli->legalska);
        $tenaga_ahli->delete();
        return redirect('tenaga_ahli')->with('status', 'data berhasil diHapus!');
    }
}
