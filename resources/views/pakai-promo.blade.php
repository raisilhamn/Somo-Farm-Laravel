@extends('layouts.main')

@section('container')
    <article style="padding-top: 50px; padding-bottom:50px">
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>

    </article>
    <a href="/" class="btn btn-success" role="button" style="background-color: #868d6f; ">Kembali</a>
@endsection
