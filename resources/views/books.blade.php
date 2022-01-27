@extends('layouts/app')

@section('title', 'Halaman Books')

@section('content')


    <div class="container mt-4">
        <h3><i class="uil uil-book-open me-1"></i>All Books</h3>
        <hr>
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
