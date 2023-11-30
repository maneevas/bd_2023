<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\BookAuthor;
use Illuminate\Http\Request;

class AdminBookAuthorController extends Controller
{
    public function index()
    {
        $bookAuthors = BookAuthor::with('book', 'author')
            ->join('books', 'book_authors.book_id', '=', 'books.id')
            ->orderBy('books.title')
            ->select('book_authors.*') // чтобы избежать перезаписи полей book_authors
            ->paginate(10);
        return view('admin.book_authors.index', compact('bookAuthors'));
    }
    

    public function create()
    {
        $books = Book::all();
        $authors = Author::all();
        return view('admin.book_authors.create', compact('books', 'authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => ['required', 'exists:books,id'],
            'author_id' => ['required', 'exists:authors,id'],
        ]);

        BookAuthor::create($request->only(['book_id', 'author_id']));

        return redirect()->route('admin.book_authors.index');
    }

    public function edit(BookAuthor $bookAuthor)
    {
        $books = Book::all();
        $authors = Author::all();
        return view('admin.book_authors.edit', compact('bookAuthor', 'books', 'authors'));
    }

    public function update(Request $request, BookAuthor $bookAuthor)
    {
        $request->validate([
            'book_id' => ['required', 'exists:books,id'],
            'author_id' => ['required', 'exists:authors,id'],
        ]);

        $bookAuthor->update($request->only(['book_id', 'author_id']));

        return redirect()->route('admin.book_authors.index');
    }

    public function destroy(BookAuthor $bookAuthor)
    {
        $bookAuthor->delete();
        return redirect()->route('admin.book_authors.index');
    }
}
