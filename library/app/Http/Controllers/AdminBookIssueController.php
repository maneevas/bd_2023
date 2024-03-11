<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\BookIssue;
use Illuminate\Http\Request;

class AdminBookIssueController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $bookIssues = BookIssue::with('book', 'user')
        ->join('books', 'book_issues.book_id', '=', 'books.id')
        ->join('users', 'book_issues.user_id', '=', 'users.id')
        ->select('book_issues.*', 'books.title', 'users.name', 'users.surname');
    
    
        if ($search) {
            $bookIssues->where(function ($query) use ($search) {
                $query->where('books.title', 'LIKE', "%{$search}%")
                    ->orWhere('users.name', 'LIKE', "%{$search}%")
                    ->orWhere('users.surname', 'LIKE', "%{$search}%");
            });
        }
    
        $bookIssues = $bookIssues->orderBy('book_issues.created_at', 'asc')->paginate(10);
        return view('admin.book_issues.index', compact('bookIssues', 'search'));
    }
    
    
    public function create()
    {
        $users = User::all();
        $books = Book::with('authors')->get();
        return view('admin.book_issues.create', compact('users', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'book_id' => ['required', 'exists:books,id'],
            'take_date' => ['required', 'date'],
            'return_date' => ['required', 'date'],
        ]);

        BookIssue::create($request->only(['user_id', 'book_id', 'take_date', 'return_date']));

        return redirect()->route('admin.book_issues.index');
    }

    public function edit(BookIssue $bookIssue)
    {
        $users = User::all();
        $books = Book::with('authors')->get();
        return view('admin.book_issues.edit', compact('bookIssue', 'users', 'books'));
    }

    public function update(Request $request, BookIssue $bookIssue)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'book_id' => ['required', 'exists:books,id'],
            'take_date' => ['required', 'date'],
            'return_date' => ['required', 'date'],
        ]);

        $bookIssue->update($request->only(['user_id', 'book_id', 'take_date', 'return_date']));

        return redirect()->route('admin.book_issues.index');
    }

    public function destroy(BookIssue $bookIssue)
    {
        $bookIssue->delete();
        return redirect()->route('admin.book_issues.index');
    }
}
