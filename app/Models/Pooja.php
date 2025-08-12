<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pooja extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     * Using guarded instead of fillable is a common alternative.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * A pooja service can have many bookings.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}