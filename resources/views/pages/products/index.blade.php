@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="mb-2">Semua Data Produk</h4>
        <a href="{{ route('produk.create') }}" class="btn btn-primary px-4">Buat Produk Baru</a>

        <div class="table-responsive mt-5">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <img src="{{ url('storage/' . $product->image) }}"
                                    style="width: 50px; height: 50px; object-fit: cover" alt="">
                            </td>
                            <td style="width: 30%">
                                {{ $product->name }}
                            </td>
                            <td>
                                Rp. {{ number_format($product->price) }}
                            </td>
                            <td>
                                {{ number_format($product->stock) }}
                            </td>
                            <td>
                                {{ $product->description }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{ route('produk.edit', $product->id) }}"
                                        class="btn btn-warning btn-sm text-white">Edit</a>

                                    <form action="{{ route('produk.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm" type="submit"
                                            onclick="confirm('Kamu yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
