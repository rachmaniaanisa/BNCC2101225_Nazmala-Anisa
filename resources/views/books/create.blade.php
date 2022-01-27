@extends('layouts/app')
@section('title', 'Create Book')

@section('content')
    <div class="container">
        <div class="col-md-8 bg-light manage-wrapper">
            <h3><i class="uil uil-plus me-1"></i>Create Books</h3>
            <p>Make your own books</p>
            <hr>

            <form action="{{ url('books/create') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                        placeholder="Masukkan Judul Buku" name="judul" value="{{ old('judul') }}">
                    @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="
                            mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" class="form-control" placeholder="Masukkan Penulis" name="penulis"
                        value="{{ old('penulis') }}">
                    @error('jumlah_halaman') <small class="number-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Halaman</label>
                    <input type="number" class="form-control" placeholder="Jumlah Halaman" name="jumlah_halaman"
                        value="{{ old('jumlah_halaman') }}">
                    @error('tahun_rilis') <small class="number-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Rilis</label>
                    <input type="number" class="form-control" placeholder="Tahun Rilis" name="tahun_rilis"
                        value="{{ old('tahun_rilis') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
