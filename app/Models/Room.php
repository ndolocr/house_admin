<?php

namespace App;
use App\Models\House;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	protected $fillable = ['name', 'status'];
	
    public function house(){
    	return $this->belongsTo(House::class);
    }
}
