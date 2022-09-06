<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showindex(){
        return view('frontview.index');
    }

    function showshop(){
        return view('frontview.shop');
    }

    function showcontact(){
        return view('frontview.contact');
    }

    function showprodukdetail(){
        return view('frontview.produk-detail');
    }

    function showcheckout(){
        return view('frontview.checkout');
    }

    function showdetail(){
        return view('frontview.detail');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showsupplier(){
        return view('backview.supplier');
    }

    function showcolegan(){
        return view('backview.colegan');
    }

    function showproduk(){
        return view('backview.produk');
    }

    function showpromo(){
        return view('backview.promo');
    }

    function showuser(){
        return view('backview.user');
    }
}