<?php

namespace App\Models;
use App\Models\House;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status'];
	
    public function house(){
    	return $this->belongsTo(House::class);
    	//return $this->belongsTo('House');
    }
}
