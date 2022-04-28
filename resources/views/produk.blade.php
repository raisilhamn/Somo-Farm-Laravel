@extends('layouts.main')
@section('headerCss')
    <link href="./css/StyleAboutUs.css" rel="stylesheet">
@endsection

@section('container')
    <div class="about-section">
        <h1>Daftar Produk</h1>
    </div>


    @foreach ($Produk as $p)
        <div class="card" style="padding: 10px">
            <h2>{{ $p['title'] }}</h2>
            <img src="{{ asset('/image/' . $p['gambar']) }}" alt="" style="width:50%">
            {{-- <p class="title">{{ $p['author'] }}</h5> --}}
            <p style="margin-top: 10px "><?= $p['body'] ?></p>
            <h3>harga : {{ $p['harga'] }}</h2>
                <a href="/produk/{{ $p['id'] }}" class="btn btn-success" role="button"
                    style="background-color: #868d6f">Beli</a>
        </div>
    @endforeach
@endsection
