<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function doc()
    {
        return view('other.doc');
    }

    public function history()
    {
        return view('other.history');
    }





    //banggunan
    public function bangunan()
    {
        $bangunan = DB::table('bangunan')->get();
        return view('other.bangunan')->with('bangunan', $bangunan);
        return view('other.bangunan');
    }

    public function bangunan_add()
    {
        return view('other.bangunan_add');
    }

    public function bangunan_addProcess(Request $request)
    {

        DB::table('bangunan')->insert([
            'id' => $request->id,
            'bangunan' => $request->bangunan,
            'desc' => $request->desc,

        ]);
        return redirect('bangunan')->with('status', 'data berhasil ditambah!');
    }

    public function bangunan_edit($id)
    {
        $bangunan = DB::table('bangunan')->where('id', $id)->first();
        return view('other.bangunan_edit', compact('bangunan'));
    }

    public function bangunan_editProcess(Request $request, $id)
    {
        DB::table('bangunan')->where('id', $id)
            ->update([
                'id' => $request->id,
                'bangunan' => $request->bangunan,
                'desc' => $request->desc,
            ]);
        return redirect('bangunan')->with('status', 'data berhasil diupdate!');
    }
    public function bangunan_delete($id)
    {
        DB::table('bangunan')->where('id', $id)->delete();
        return redirect('bangunan')->with('status', 'data berhasil dihapus!');
    }


    
}
