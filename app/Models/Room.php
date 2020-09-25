<?php

namespace App;
use App\House;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	protected $fillable = ['name', 'status'];
	
    public function house(){
    	retun this->belongsTo(House::class);
    }
}
