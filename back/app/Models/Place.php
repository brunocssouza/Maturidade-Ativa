<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends Model
{

    protected $fillable = [
        'name', 
        'room_id'
    ];

    public function items() {
        return $this->hasMany(Item::class);
    }

    public $timestamps = false;
}
