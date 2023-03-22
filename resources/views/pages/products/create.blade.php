@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="mb-5">Tambah Data Baru</h4>

        <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="image">Gambar</label>
                <input type="file" accept="image/*" name="image" class="form-control" id="image" required>
            </div>
            <div class="mb-3">
                <label for="name">Nama Produk</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="price">Harga Produk</label>
                <input type="number" name="price" class="form-control" id="price" required>
            </div>
            <div class="mb-3">
                <label for="stock">Stok Produk</label>
                <input type="number" name="stock" class="form-control" id="stock" required>
            </div>
            <div class="mb-3">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control" required></textarea>
            </div>
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-primary px-3" type="submit">Simpan Baru</button>
                <a href="{{ route('produk.index') }}" class="btn btn-light px-3">Kembali</a>
            </div>
        </form>
    </div>
@endsection
