<?php

namespace App\Http\Controllers;

use App\Borrow;
use App\Member;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = Borrow::paginate(10);
        return view('admin.borrows.index')->with(compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::all();
        return view('admin.borrows.create')->with(compact('members'));
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

        $borrow = Borrow::create($request->all());
        
        return redirect(route('borrows.create')) -> with( 'message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(Borrow $borrow)
    {
        return view('admin.borrows.show')->with(compact('borrow'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrow $borrow)
    {
        $members = Member::all();
        return view('admin.borrows.edit')->with(compact('borrow', 'members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrow $borrow)
    {
        $this->validation($request);

        $borrow->update($request->all());
        
        return redirect(route('borrows.index')) -> with( 'message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
        return redirect(route('borrows.index')) -> with( 'message', 'Deleted Successfully');
    }

    public function validation(Request $request)
    {
        // $this->validate(request(), [
        //     'book_id' => 'required',
        //     'serial_no' => 'required'
        // ]);
    }
}
