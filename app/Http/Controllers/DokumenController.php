<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function suncLegal(){
        return view('legal.sunc');
    }

    public function alat(){
        return view('dokumen.peralatan');
    }
    
    
}
