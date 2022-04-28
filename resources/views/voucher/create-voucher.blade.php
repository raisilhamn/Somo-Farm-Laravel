@extends('layouts.v_template')
@section('content')
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="#" class="btn btn-success"> tambah data <i class="fas fa-plus-square"></i></a>

            </div>

        </div>
        <div class="card-body">
            <form method="post" action="{{ route('simpan') }}">
                @csrf 
                <div class="mb-3">
                    <label for="Nama voucher" class="form-label">Nama Voucher</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="mb-3">
                    <label for="Tanggal" class="form-label">Tanggal Expired</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal-Bulan-Tahun">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Jumlah diskon</label>
                    <input type="text" class="form-control" id="jumlahdiskon" name="jumlahdiskon">
                </div>

                <div class="mb-3">
                    <label for="deskripsi produk" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>

                {{-- <div class="mb-3">
                    <label for="category" class="form-label"></label>
                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example">
                        <option selected>Pilih kategori</option>
                        <option value="1">Sapi</option>
                        <option value="2">Domba</option>
                        <option value="3">Kelinci</option>
                    </select>
                </div> --}}

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
