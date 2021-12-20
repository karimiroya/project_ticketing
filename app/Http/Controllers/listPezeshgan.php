<?php

namespace App\Http\Controllers;
use App\Models\Pezeshgan;
use GuzzleHttp\Promise\Create;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Carbon\Carbon;

class listPezeshgan extends Controller
{
    public function listPezeshgan()
    {
        $pezeshgan = Pezeshgan::get();
        // dd( $pezeshgan);
        return view('/admin/listPezeshgan',compact('pezeshgan'));
    }
    public function savePezeshk( Request $request)
    {
       $roz=collect([ $request->roz1,$request->roz2,$request->roz3,$request->roz4,$request->roz5,$request->roz6,$request->roz7])->implode(' ');
    $zaman=collect([$request->zaman1,$request->zaman2])->implode(' ');
        Pezeshgan::create(['esm'=>$request->name,
        'famil'=>$request->family,
        'takhasos'=>$request->takhasos,
        'rozeNobat'=>$roz,
        'zamanNobat'=> $zaman,
        'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        
    ]);
       
    }
    public function reseve_nobat()
    {
       
        return view('reseve_nobat');
    }

}