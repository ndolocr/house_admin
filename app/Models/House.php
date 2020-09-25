<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class house extends Model
{
	protected $fillable = ['name', 'details', 'street', 'county', 'section', 'plot_number', 'land_reference'];
	
    public function room(){
    	return this->hasMany(Room::class);
    }
}
