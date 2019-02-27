<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Repositories\AuthorRepository;

class AuthorsController extends Controller
{
    private $authorRepository;
    public function __construct(AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    public function index()
    {
        $authors = $this->authorRepository->paginate(10);
        return view('authors.index', [
            'authors' => $authors
        ]);
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->input('name');
        $author->surname = $request->input('surname');
        $author->save();
        return redirect('/authors');
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $author->name = $request->input('name');
        $author->surname = $request->input('surname');
        $author->save();
        return redirect('/authors');
    }
}
