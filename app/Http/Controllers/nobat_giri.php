<?php

namespace App\Http\Controllers;
use App\Models\Pezeshgan;
use Illuminate\Http\Request;

class nobat_giri extends Controller
{
    public function nobat_giri()
    {
        $pezeshgan = Pezeshgan::get();
        // dd( $pezeshgan);
       
        return view('nobat_giri',compact('pezeshgan'));
    }

}