<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_active', 'author_id', 'book_id'
    ];

    /**
     *
     * @return the book
     */
    public function book()
    {
    	return $this->belongsTo(\App\Book::class);
    }

    /**
     *
     * @return the author
     */
    public function author()
    {
    	return $this->belongsTo(\App\Author::class);
    }
}