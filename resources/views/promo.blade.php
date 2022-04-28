@extends('layouts.main')
@section('headerCss')
    <link href="./css/StyleAboutUs.css" rel="stylesheet">
@endsection

@section('container')
    <div class="about-section">
        <h1>Voucher Spesial</h1>
    </div>


    @foreach ($posts as $post)
        <div class="card" style="padding: 10px">
            <h2>{{ $post['title'] }}</h2>
            <p class="title">{{ $post['author'] }}</h5>
            <p><?= $post['body'] ?></p>
            <a href="/pakai-promo/{{ $post['slug'] }}" class="btn btn-success" role="button"
                style="background-color: #868d6f">Pakai Voucher</a>
        </div>
    @endforeach
@endsection
