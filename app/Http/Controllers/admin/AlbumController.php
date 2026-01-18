<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::latest()->paginate(10);

        return view('admin.albums.index', compact('albums'));
    }

    public function create()
    {
        return view('admin.albums.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'album');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'album/banner');
        $input['slug'] = Str::slug($request->name);
        Album::create($input);

        return redirect()->route('album.index')->with('message', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Album $album)
    {
        return view('admin.albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $input = $request->all();
        $old_image = $album->image;
        $image = fileUpload($request, 'image', 'Album');
        $banner_image = fileUpload($request, 'banner_image', 'Album/banner');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        if ($banner_image) {
            removeFile($old_image);
            $input['banner_image'] = $banner_image;
        } else {
            unset($input['banner_image']);
        }

        $input['slug'] = Str::slug($request->name);

        $album->update($input);

        return redirect()->route('album.index')->with('message', 'Updated Successfully');
    }

    public function destroy(Album $album)
    {
        // Delete all associated gallery images
        foreach ($album->galleries as $gallery) {
            removeFile($gallery->image);
            $gallery->delete();
        }
        removeFile($album->image);
        removeFile($album->banner_image);

        $album->delete();

        return redirect()->route('album.index')->with('message', 'Deleted Successfully');
    }
}
