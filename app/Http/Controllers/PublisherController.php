<?php

namespace App\Http\Controllers;

use App\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::paginate(10);
        return view('admin.publishers.index', ['publishers'=>$publishers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publishers.create');
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

        $publisher = new Publisher();
        $publisher->name = $request -> name;
        $publisher->address = $request -> address;
        $publisher->phone_number = $request -> phone_number;
        $publisher->email = $request -> email;
        $publisher->save();
        return redirect(route('publishers.create')) -> with( 'message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
        return view('admin.publishers.show', ['publisher' => $publisher ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {
        return view('admin.publishers.edit', ['publisher' => $publisher ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher)
    {
        $this->validation($request);

        $publisher->name = $request -> name;
        $publisher->address = $request -> address;
        $publisher->phone_number = $request -> phone_number;
        $publisher->email = $request -> email;
        $publisher->update();
        return redirect(route('publishers.index')) -> with( 'message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return redirect(route('publishers.index')) -> with( 'message', 'Deleted Successfully');
    }

    public function validation(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'nullable'
        ]);
    }
}
