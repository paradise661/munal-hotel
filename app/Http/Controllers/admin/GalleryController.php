<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Album;  // make sure you have this
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // List galleries for a specific album
    public function index($album_id)
    {
        $album = Album::findOrFail($album_id);
        $galleries = Gallery::where('album_id', $album_id)->latest()->paginate(24);
        return view('admin.albums.gallery.index', compact('album', 'galleries'));
    }

    // Show form to upload images for a specific album
    public function create($album_id)
    {
        $album = Album::findOrFail($album_id);
        return view('admin.albums.gallery.create', compact('album'));
    }

    // Store images for a specific album
    public function store(Request $request, $album_id)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $album = Album::findOrFail($album_id);
        $imagePath = fileUpload($request, 'file', 'gallery');

        Gallery::create([
            'album_id' => $album->id,
            'image' => $imagePath,
        ]);

        return response()->json(['success' => true, 'path' => $imagePath]);
    }

    // Delete gallery image
    public function documentDelete($album_id, $id)
    {
        $gallery = Gallery::where('album_id', $album_id)->findOrFail($id);
        removeFile($gallery->image);
        $gallery->delete();

        return response()->json(['success' => true]);
    }
}
