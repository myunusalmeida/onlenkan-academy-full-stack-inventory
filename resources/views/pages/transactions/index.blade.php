@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="mb-2">Transaksi</h4>
        <a href="{{ route('transaksi.create') }}" class="btn btn-primary px-4">Buat Transaksi Baru</a>

        <div class="table-responsive mt-5">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Quantity</th>
                        <th>User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $item)
                        <tr>
                            <td style="width: 30%">
                                {{ $item->products->name }}
                            </td>
                            <td>
                                {{ number_format($item->quantity) }}
                            </td>
                            <td>
                                {{ $item->users->name }}
                            </td>
                            <td>
                                <form action="{{ route('transaksi.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm" type="submit"
                                        onclick="confirm('Kamu yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
