<?php

namespace App\Models;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    public function room(){
    	return $this->belongsToMany(Room::class);
    }
}
