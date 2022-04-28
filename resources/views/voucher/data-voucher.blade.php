@extends('layouts.v_template')
@section('content')
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('create-voucher') }}" class="btn btn-success"> tambah data <i class="fas fa-plus-square"></i></a>

            </div>

        </div>
        <div class="card-body">
            <table class="table table-bordered"> 
                <tr>
                    <th>nama</th>
                    <th>tanggal</th>
                    <th>jumlah diskon</th>
                    <th>deskripsi</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($dtVoucher as $item )
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jumlahdiskon }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                       <a href=""><button type="button" class="btn btn-primary">Edit</button></a> 
                       <a href=""><button type="button" class="btn btn-danger">Delete</button></a> 
                    </td>
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
@endsection
