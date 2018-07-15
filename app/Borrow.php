<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id', 'borrow_date', 'borrow_return_date'
    ];

    /**
     *
     * @return the member
     */
    public function member()
    {
    	return $this->belongsTo(\App\Member::class);
    }
}
