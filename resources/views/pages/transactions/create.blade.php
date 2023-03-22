@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="mb-5">Tambah Transaksi Baru</h4>

        <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="produk">Produk</label>
                <select name="product_id" id="produk" class="form-control" required>
                    @foreach ($products as $item)
                        <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->stock }})</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="quantity" required>
            </div>

            @if (session('error'))
                <div class="alert alert-danger mb-3">
                    {{ session('error') }}
                </div>
            @endif

            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-primary px-3" type="submit">Simpan Baru</button>
                <a href="{{ route('transaksi.index') }}" class="btn btn-light px-3">Kembali</a>
            </div>
        </form>
    </div>
@endsection
