<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookSerial extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_id', 'serial_no', 'is_active'
    ];

    /**
     *
     * @return the book
     */
    public function book()
    {
    	return $this->belongsTo(\App\Book::class);
    }
}