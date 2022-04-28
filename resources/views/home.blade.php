@extends('layouts.main')

@section('container')
    {{-- <p><?= $desc ?></p> --}}
    {{-- <h3><?= $Isi ?></h3> --}}

    <div style="text-align: center ; margin: 50px">
        <h1>Selamat datang di Somo Farm</h1>
        <img src="{{ asset('/image/somofarm.png') }}" alt="{{ __('logo Somo Farm') }}">

    </div>
@endsection
