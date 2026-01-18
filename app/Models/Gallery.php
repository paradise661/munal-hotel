<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'album_id',
        ];
    public function gallery()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
}
