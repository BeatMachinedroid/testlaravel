<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kampu;
class KampuController extends Controller
{
    function show()
        {
            $data = kampu::all();
            return view('index',['tbl_transaksis'=>$data]);
        }

    function showinput()
    {
        return view('input');
    }

    function adddata(Request $req)
        {
        //     $harga = 0;
        //     $tbl_transaksi= new kampu;
        //     if($req->name="Buku Tulis"): $harga = 5000;
        //     elseif($req->nama="pena"): $harga = 3500;
        //     elseif($req->nama="pensil"): $harga = 2000;
        // endif;
        // $total = $harga * $req->jumlah;

        // $tbl_transaksi->namaBarang=$req->nama;
        // $tbl_transaksi->hargaBarang=$harga;
        // $tbl_transaksi->jumlahBarang=$req->jumlah;
        // $tbl_transaksi->totalHarga=$total;
        // $tbl_transaksi->save();
    
        // return redirect('/');
        
        }
}
