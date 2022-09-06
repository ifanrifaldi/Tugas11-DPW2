<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientProdukController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
        return view('home', $data);
    }
    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('detail', $data);
    }
    function prod(){
        $data['list_produk'] = Produk::all();
        $data['list_produk'] = Produk::simplePaginate(8);
        return view('product', $data);
    }

    function seller(){
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('template.frontview.seller', $data);
    }
}


