@extends('layouts.main')

@section('container')
    <article style="padding-top: 50px; padding-bottom:50px">
        <h2>{{ $cari["title"] }}</h2>
        <p>By {{ $cari['author'] }} in {{ $produk->category->name }} </p>
        <h5>{{ $cari["author"] }}</h5>
        <p>{{ $cari["body"] }}</p>

    </article>
    <a href="/produk" class="btn btn-success" role="button" style="background-color: #868d6f; text-justify: center ">Kembali</a>
@endsection
