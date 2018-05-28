<?php

namespace App\Http\Controllers;

use App\Book;
use App\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('admin.books.index', ['books'=>$books] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publishers = Publisher::all();
        return view('admin.books.create')->with(compact('publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $this->validation($request);

        $book = Book::create($request->all());
        if($request->image){
            $book->image = \App\helperClass::imageUpload($request, 'books');
            $book->update();
        }

        return redirect(route('books.create')) -> with( 'message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('admin.books.show', ['book' => $book ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {        
        $publishers = Publisher::all();
        return view('admin.books.edit', ['book' => $book, 'publishers'=>$publishers ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validation($request);

        $book->update($request->all());
        if($request->image){
            $book->image = \App\helperClass::imageUpload($request, 'books');
            $book->update();
        }
        
        return redirect(route('books.index')) -> with( 'message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('books.index')) -> with( 'message', 'Deleted Successfully');
    }

    public function validation(Request $request)
    {
        $this->validate(request(), [
            'publisher_id' => 'required|numeric',
            'name' => 'required',
            'price' => 'required|numeric',
            'isbn' => 'required|numeric',
            'rack_no' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'required',
        ]);
    }
}



