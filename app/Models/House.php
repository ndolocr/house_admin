<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details', 'street', 'county', 'section', 'plot_number', 'land_reference'];
	
    public function room(){
    	return $this->hasMany(Room::class);
    }
}
