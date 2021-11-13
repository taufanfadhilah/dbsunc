<?php

namespace App\Http\Controllers;
use App\Lelang;
use App\fase;
use App\Perencanaan;
use App\Pengawasan;
use App\Masterplan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $lelang = lelang::all();   
        // return view('home', compact('lelang'));
        $lelang = Lelang::with('fase')->get();
        $count_perencanaan = DB::table('perencanaan')->count();
        $count_pengawasan = DB::table('pengawasan')->count();
        $count_masterplan = DB::table('masterplan')->count();
        $count_study = DB::table('study')->count();
        $count_tenaga_ahli = DB::table('tenaga_ahli')->count();
        $count_lelang = DB::table('lelang')->count();
        return view('home', compact(['lelang','count_perencanaan','count_pengawasan','count_masterplan','count_study','count_lelang']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lelang = lelang::all();
        $fase = fase::all();
        //return view('create', compact('lelang'));
        return view('create', compact(['lelang', 'fase']));
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
            'fase_Id' => 'required',
            'tanggal' => 'required',
        ],);

        lelang::create($request->all());


        // lelang::create([
        //     'nama_paket' => $request->nama_paket,
        //     'fase_id' => $request->fase_id,
        //     'tanggal' => $request->tanggal,
        // ]);
        
        //return $request;
        return redirect('home')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function show(Lelang $lelang)
    {
        // $lelang->makeHidden(['bangunan_id', 'bast_id']);
        // return view('dashboard/show', compact('lelang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function edit(Lelang $lelang, $id)
    {
        //$lelang = DB::table(['lelang', 'fase'])->where('id', $id)->first();
        // return view('edit', compact('lelang'));
        $lelang = lelang::all();
        $fase = fase::all();
        return view('edit', compact('lelang', 'fase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|min:2',
            'fase_Id' => 'required',
            'tanggal' => 'required',
            
        ],);

        Lelang::create($request->all());
        return redirect('home')->with('status', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('lelang')->where('id', $id)->delete();
        return redirect('home')->with('status', 'data berhasil dihapus!');
    }
}

    