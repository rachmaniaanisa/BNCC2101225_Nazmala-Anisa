@extends('layouts.app')

@section('title", "Manage Books')

@section('content')
    <div class="container">
        <div class="col-md-8 bg-light manage-wrapper">
            <h3><i class="uil uil-create-dashboard me-1"></i>Manage Books</h3>
            <p>Manage the books and do not forget to recheck it</p>
            <hr>
            <a href="{{ url('books/create') }}" class="btn btn-success mb-3"><i class="uil uil-plus me-1"></i>Create
                Books</a>

            @if (session()->has('status_sukses'))
                <div class="alert alert-success" roles="alert">
                    {{ session('status_sukses') }}
                </div @endif

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Jumlah Halaman</th>
                            <th>Tahun Rilis</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $book->judul }}</td>
                                <td>{{ $book->penulis }}</td>
                                <td>{{ $book->jumlah_halaman }}</td>
                                <td>{{ $book->tahun_rilis }}</td>
                                <td>
                                    <a href="#" class="text-primary"><i class="uil uil-edit-alt"></i></a>
                                    <a href="#" class="text-danger"><i class="uil uil-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
