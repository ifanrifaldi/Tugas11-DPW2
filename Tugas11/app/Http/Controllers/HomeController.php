<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller{

    function ShowTemplate(){
        return view ('template.base1');
    }
    function ShowIndex(){
        $data['list_produk'] = Produk::orderby('id', 'DESC')->take(3)->get();
        return view ('index', $data);
    }
    function ShowShop(){
        return view ('shop');
    }
    function ShowContact(){
        return view ('contact');
    }
    
    function ShowHome(){
        return view ('home');
    }
    function ShowProduk(){
        return view ('produk');
    }
    function ShowSupplier(){
        return view ('Supplier');
    }

}