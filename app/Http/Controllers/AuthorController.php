<?php

namespace App\Http\Controllers;


use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addNew(Request $request){
        $author = new Author();
        $author->name = $request -> name;
        $author->save();
        return redirect('/create') -> with( 'message', 'Added Successfully');
    }
}
