<?php

namespace App\Http\Controllers\admin;

use App\Models\RoomCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomcategorys = RoomCategory::paginate(10);

        return view('admin.roomcategory.index', compact('roomcategorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.roomcategory.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $input['seo_title'] = $request->seo_title ?? $request->title;
        $input['slug'] = $input['slug'] ? make_slug($input['slug']) : make_slug($input['title']);
        $rules = [
            'title' => 'required|min:3',
        ];
        $imagelist = ['image'];
        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('roomcategory.create')->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $imageName = fileUpload($request, $image, 'course');
                $input[$image] = $imageName;
            }
        }

        $course = RoomCategory::create($input);

        return redirect()->route('roomcategory.index')->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomCategory $roomcategory)
    {
        //
        return view('admin.roomcategory.edit', compact('roomcategory'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomCategory $roomcategory)
    {
        //
        $input = $request->all();
        $input['seo_title'] = $request->seo_title ?? $request->title;
        $input['slug'] = $input['slug'] ? make_slug($input['slug']) : make_slug($input['title']);

        $rules = [
            'title' => 'required|min:3',
        ];

        $imagelist = ['image'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('roomcategory.edit', $roomcategory)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {

                if ($roomcategory->$image != '') {
                    $file = $roomcategory->$image;
                    removeFile($file);
                }

                $imageName = fileUpload($request, $image, 'roomcategory');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($roomcategory->$image != '') {
                    $file = $roomcategory->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }

        $roomcategory->update($input);

        return redirect()->route('roomcategory.index')->with('success', 'Category Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomCategory $course)
    {
        //
        $imagelist = ['image'];

        foreach ($imagelist as $image) {
            if ($course->$image != '') {
                $file = $course->$image;
                removeFile($file);
            }
        }

        $course->delete();

        return redirect()->route('roomcategory.index')->with('success', 'Category Deleted successfully.');
    }
}
