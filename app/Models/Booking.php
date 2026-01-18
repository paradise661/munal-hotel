<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'order',
        'status',
        'title',
        'slug',
        'short_description',
        'description',
        'room_type',
        'checkin_date',
        'checkout_date',
        'adults',
        'children',
        'first_name',
        'last_name',
        'email',
        'phone',
        'special_request',
        'add_ons',
    ];

    protected $casts = [
        'checkin_date' => 'date',
        'checkout_date' => 'date',
        'add_ons' => 'array',
    ];
}
