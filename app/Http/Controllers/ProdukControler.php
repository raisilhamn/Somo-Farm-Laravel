<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class ProdukControler extends Controller
{
    public function index()
    {
        return view('produk', [
            "title" => "Produk",
            "Produk" => \App\Models\Produk::all()
        ]);
    }

    public function show($slug)
    {
        return view('produk-detail', [
            'title' => 'produk',
            "cari" => \App\Models\Produk::find($slug)
        ]);
    }
}
