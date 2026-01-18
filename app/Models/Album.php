<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'status', 'order', 'image', 'banner_image', 'description', 'seo_schema', 'seo_title', 'seo_keywords', 'seo_description'];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'album_id');
    }
}
