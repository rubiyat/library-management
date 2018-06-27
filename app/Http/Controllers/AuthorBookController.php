<?php

namespace App\Http\Controllers;

use App\AuthorBook;
use App\Book;
use App\Author;
use Illuminate\Http\Request;

class AuthorBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorBooks = AuthorBook::paginate(10);
        return view('admin.authorBooks.index', ['authorBooks'=>$authorBooks] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::orderBy('name')->get();
        $authors = Author::orderBy('name')->get();
        return view('admin.authorBooks.create')->with(compact('books', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate(request(), [
        //     'name' => 'required'
        // ]);

        $authorBook = new AuthorBook();
        $authorBook->book_id = $request -> book_id;
        $authorBook->author_id = $request -> author_id;
        $authorBook->save();
        return redirect(route('authorBooks.create')) -> with( 'message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorBook $authorBook)
    {        
        return view('admin.authorBooks.show', ['authorBook' => $authorBook ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorBook $authorBook)
    {
        $books = Book::orderBy('name')->get();
        $authors = Author::orderBy('name')->get();
        return view('admin.authorBooks.edit', ['authorBook' => $authorBook ])->with(compact('books', 'authors'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorBook $authorBook)
    {
        $authorBook->book_id = $request->book_id;
        $authorBook->author_id = $request->author_id;
        $authorBook->update();
        return redirect(route('authorBooks.index')) -> with( 'message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorBook $authorBook)
    {        
        $authorBook->delete();
        return redirect(route('authorBooks.index')) -> with( 'message', 'Deleted Successfully');
    }
}
