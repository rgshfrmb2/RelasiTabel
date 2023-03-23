<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Controller index
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }


    // controller create
    public function create()
    {
        return view('books.create');
    }

    public function store(request $request)
    {
        $create = Book::create([
            'name' => $request->get('name'),
            'page' => $request->get('page'),
            'author' => $request->get('author'),
            'published_at' => $request->get('published_at'),
        ]);

        if ($create) {
            return redirect()->route('book.index')->with('success', 'Data berhasil dibuat');
        }

        return redirect()->route('book.create')->with('error', 'Data gagal dibuat');
    }





    // Controller edit
    public function edit($id_buku)
    {

        $book = Book::find($id_buku);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id_buku)
    {
        $book = Book::find($id_buku);
        $update = $book->update([
            'name' => $request->get('name'),
            'page' => $request->get('page'),
            'author' => $request->get('author'),
            'published_at' => $request->get('published_at'),
        ]);

        if ($update) {
            return redirect()->route('book.index')->with('success', 'Data berhasil dibuat');
        }

        return redirect()->route('book.edit', ['id_buku' => $book->id])->with('error', 'Data gagal dibuat');
    }





    // Controller delete
    public function destroy($id_buku)
    {
        $book = Book::find($id_buku);
        $book->delete();

        return redirect()->route('book.index')
            ->with('success', 'Berhasil Hapus !');
    }




    // Controller detail
    public function detail($id_buku)
    {
        $book = Book::find($id_buku);
        return view('books.detail', compact('book'));
    }
}





