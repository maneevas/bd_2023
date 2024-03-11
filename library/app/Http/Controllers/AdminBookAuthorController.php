<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\BookAuthor;
use Illuminate\Http\Request;

class AdminBookAuthorController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $bookAuthors = BookAuthor::with('book', 'author')
        ->join('books', 'book_authors.book_id', '=', 'books.id')
        ->join('authors', 'book_authors.author_id', '=', 'authors.id')
        ->select('book_authors.*', 'books.title', 'authors.name', 'authors.surname');
    

    
        if ($search) {
            $bookAuthors->where(function ($query) use ($search) {
                $query->where('books.title', 'LIKE', "%{$search}%")
                    ->orWhere('authors.name', 'LIKE', "%{$search}%")
                    ->orWhere('authors.surname', 'LIKE', "%{$search}%");
            });
        }
    
        $bookAuthors = $bookAuthors->orderBy('books.title', 'asc')->orderBy('book_authors.id', 'asc')->paginate(10);
        return view('admin.book_authors.index', compact('bookAuthors', 'search'));
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
