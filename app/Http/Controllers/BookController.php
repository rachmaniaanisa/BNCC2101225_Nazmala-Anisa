<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function showAllBook()
    {
        $books = Book::all();
        return view('books/index', compact('books'));
    }

    public function create()
    {
        return view('books/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'jumlah_halaman' => 'required|integer|min:150|max:900',
            'tahun_rilis' => 'required|integer|min:2000|max:2021',
        ]);


        Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'jumlah_halaman' => $request->jumlah_halaman,
            'tahun_rilis' => $request->tahun_rilis,
        ]);

        return redirect('/books/manage') -> with('status_sukses', 'Book berhasil ditambahkan');
    }
}