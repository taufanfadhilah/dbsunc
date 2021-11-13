<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = role::all();        
        //return $perencanaan;
        return view('other/role', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = role::all();
        return view('other.role_add', compact('role'));
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
            'jabatan' => 'required|min:2',
        ],);

        role::create($request->all());
        return redirect('role')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $role = DB::table('role')->where('id', $id)->first();
        return view('other.role_edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'jabatan' => 'required|min:2',
        ],);

        DB::table('role')->where('id', $id)
            ->update([
                'jabatan' => $request->jabatan,
                
            ]);
        return redirect('role')->with('status', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('role')->where('id', $id)->delete();
        return redirect('role')->with('status', 'data berhasil dihapus!');
    }
}
