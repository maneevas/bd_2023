<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AdminAuthorController extends Controller
{
    
    public function index()
    {
        $authors = Author::orderBy('surname')->paginate(10);
        return view('admin.authors.index', compact('authors'));
    }
    

    public function edit(Author $author)
    {
        return view('admin.authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $author->update($request->all());
        return redirect()->route('admin.authors.index');
    }

    public function create()
    {
        return view('admin.authors.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'patname' => ['required', 'string'],
            'bd_date' => ['required', 'date'], // Дата рождения
        ]);
    
        $author = new Author;
        $author->name = $request->name;
        $author->surname = $request->surname;
        $author->patname = $request->patname;
        $author->bd_date = $request->bd_date; // Дата рождения
        $author->save();
        return redirect()->route('admin.authors.index');
    }
    

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('admin.authors.index');
    }
}
