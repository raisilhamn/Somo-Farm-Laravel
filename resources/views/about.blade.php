@extends('layouts.main')
@section('headerCss')
    <link href="./css/StyleAboutUs.css" rel="stylesheet">
@endsection

@section('container')
    <div class="about-section" style="background-color: #468080">
        <h1>About Us Page</h1>
        <p>Let us introduce ourself</p>

    </div>
    <h2 style="text-align:center">Our Team</h2>
    <div class="row" style="justify-content: center">
        <div class="column">
            <div class="card">
                <img src="{{ asset('/image/gambar2.jpg') }}" alt="Pak somo" style="width:100%">
                {{-- <img src="/image/gambar2.jpg" alt="Pak" style="width:100%"> --}}
                <div class="container">
                    <h2>{{ $namaCEO }}</h2>
                    <p class="title">{{ $KeteranganCEO }}</p>
                    <p>Ayahanda Syaiful</p>
                    <p><button class="button" style="background-color: #468080">{{ $Kontak }}</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="{{ asset('/image/gambar1.jpg') }}" alt="ipul" style="width:100%">
                {{-- <img src="/image/gambar1.jpg" alt="Ipul" style="width:100%"> --}}
                <div class="container">
                    <h2>{{ $namaCTO }}</h2>
                    <p class="title">{{ $KeteranganCTO }}</p>
                    <p>Anak dari Bapak Somo</p>
                    <p><button class="button" style="background-color: #468080">{{ $Kontak }}</button></p>
                </div>
            </div>
        </div>
    </div>
@endsection
