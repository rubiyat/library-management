<?php

namespace App\Http\Controllers;

use App\BookSerial;
use App\Book;
use Illuminate\Http\Request;

class BookSerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookSerials = BookSerial::paginate(10);
        return view('admin.bookSerials.index')->with(compact('bookSerials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::orderBy('name')->get();
        return view('admin.bookSerials.create')->with(compact('books'));
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

        $bookSerial = BookSerial::create($request->all());
        
        return redirect(route('bookSerials.create')) -> with( 'message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookSerial  $bookSerial
     * @return \Illuminate\Http\Response
     */
    public function show(BookSerial $bookSerial)
    {
        return view('admin.bookSerials.show', ['bookSerial' => $bookSerial ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookSerial  $bookSerial
     * @return \Illuminate\Http\Response
     */
    public function edit(BookSerial $bookSerial)
    {
        $books = Book::orderBy('name')->get();
        return view('admin.bookSerials.edit', ['bookSerial' => $bookSerial, 'books'=>$books ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookSerial  $bookSerial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookSerial $bookSerial)
    {
        $this->validation($request);

        $bookSerial->update($request->all());
        
        return redirect(route('bookSerials.index')) -> with( 'message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookSerial  $bookSerial
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookSerial $bookSerial)
    {
        $bookSerial->delete();
        return redirect(route('bookSerials.index')) -> with( 'message', 'Deleted Successfully');
    }

    public function validation(Request $request)
    {
        $this->validate(request(), [
        ]);
    }
}
