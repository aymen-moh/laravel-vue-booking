<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['from', 'to', 'bookable_id'];

    public function bookable()
    {
        return $this->belongsTo(Booking::class);
    }
}
