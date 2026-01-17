<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    protected $fillable = [
        'order',
        'status',
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'seo_title',
        'seo_schema',
        'meta_keywords',
        'meta_description',
    ];
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
