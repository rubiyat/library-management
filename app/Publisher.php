<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'phone_number', 'email'
    ];

    /**
     *
     * @return the all books from the publisher.
     */
    public function books()
    {
    	return $this->hasMany(\App\Book::class);
    }
}