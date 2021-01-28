<?php

namespace App;
use App\Review;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


	protected $fillable=[
   'name','detail','price','stock','discount'
	];
	public function review(){

		return $this->hasMany(Review::class);
	}
    //
}
