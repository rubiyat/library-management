<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'publisher_id', 'name', 'price', 'isbn', 'rack_no', 'image', 'is_active'
    ];

    /**
     *
     * @return the publisher
     */
    public function publisher()
    {
    	return $this->belongsTo(\App\Publisher::class);
    }

}