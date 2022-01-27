@extends('layouts/app')

@section('title', 'Halaman Home')

@section('content')


    <div class="container bg-danger text-white banner">
        <h1>Selamat Datang di StarOne</h1>
        <p>Kumpulan informasi buku menarik dan terupdate setiap harinya</p>

        <a href="#" class="btn btn-warning">Manage Books</a>
        <a href="#" class="btn btn-dark">Contact Us</a>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <div class="col-md-12 bg-light game-content">
                        <h1 class="judul">{{ $book->judul }}</h1>
                        <span class="penulis badge bg-dark">{{ $book->penulis }}</span>
                        <p class="jumlah-halaman">{{ $book->jumlah_halaman }}</p>
                        <span class="tahun-rilis">Tahun Rilis: {{ $book->tahun_rilis }}</span>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@endsection
