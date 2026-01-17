<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_category_id',
        'order',
        'status',
        'title',
        'slug',
        'short_description',
        'description',
        'area',
        'max_guest',
        'price',
        'banner_image',
        'image',
        'image_1',
        'seo_title',
        'seo_schema',
        'meta_keywords',
        'meta_description',
    ];
    public function category()
    {
        return $this->belongsTo(RoomCategory::class);
    }
}
