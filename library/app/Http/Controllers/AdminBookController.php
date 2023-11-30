<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AdminBookController extends Controller
{
    
    public function index()
    {
        $books = Book::orderBy('title')->paginate(10);
        return view('admin.books.index', compact('books'));
    }
    

    public function edit(Book $book)
    {
        $book->load('authors');
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('admin.books.index');
    }

    public function create()
    {
        return view('admin.books.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'creation_year' => ['required', 'integer'],
            'genre' => ['required', 'string'],
        ]);
    
        $book = new Book;
        $book->title = $request->title;
        $book->creation_year = $request->creation_year;
        $book->genre = $request->genre;
        $book->save();
        return redirect()->route('admin.books.index');
    }
    

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index');
    }
}
