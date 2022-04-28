@extends('layouts.v_template')
@section('content')

    <div class="col-lg-5">
        <h3>Form untuk menambahkan produk baru</h3>
        
        <form method="POST" action="/super-admin/posts">
            @csrf
            <div class="mb-3">
                <label for="Judul Produk" class="form-label">Judul Produk</label>
                <input type="text" class="form-control" id="judul-produk" name="judul">
            </div>
            
            <label for="Tanggal lahir" class="form-label">Tanggal lahir</label>
            <div class="input-group date mb-3" id="datepicker">
                <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
                <span class="input-group-append">
                    <span class="input-group-text bg-light d-block">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>

            <div class="mb-3">
                <label for="Judul Produk" class="form-label">Berat badan</label>
                <input type="text" class="form-control" id="bulan" name="judul">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div>
                <label for="category" class="form-label"></label>
                <select class="form-select form-select mb-3" aria-label=".form-select-lg example">
                    <option selected>Pilih kategori</option>
                    <option value="1">Sapi</option>
                    <option value="2">Domba</option>
                    <option value="3">Kelinci</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Masukkan foto</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
