<?php

namespace App\Http\Controllers\admin;

use App\Models\Room;
use App\Models\Country;
use App\Models\RoomCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $countrys = Room::paginate(10);

        return view('admin.country.index', compact('countrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = RoomCategory::where('status', 1)->orderBy('order')->get();
        return view('admin.country.create',compact('categories'));
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

        $imagelist = ['image', 'image_1', 'career_image', 'university_image', 'visa_image', 'documentation_image', 'financial_image', 'departure_image'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('country.create')->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $imageName = fileUpload($request, $image, 'room');
                $input[$image] = $imageName;
            }
        }

        $room = Room::create($input);

        return redirect()->route('country.index')->with('success', 'Country added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $country)
    {
        $categories = RoomCategory::where('status', 1)->orderBy('order')->get();
        return view('admin.country.edit', compact('country','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $country)
    {
        //
        $input = $request->all();
        $input['seo_title'] = $request->seo_title ?? $request->title;
        $input['slug'] = $input['slug'] ? make_slug($input['slug']) : make_slug($input['title']);

        $rules = [
            'title' => 'required|min:3',
        ];

        $imagelist = ['image', 'image_1', 'career_image', 'university_image', 'visa_image', 'documentation_image', 'financial_image', 'departure_image'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('country.edit', $country)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {

                if ($country->$image != '') {
                    $file = $country->$image;
                    removeFile($file);
                }

                $imageName = fileUpload($request, $image, 'country');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($country->$image != '') {
                    $file = $country->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }

        $country->update($input);

        return redirect()->route('country.index')->with('success', 'Room Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $country)
    {
        //
        $imagelist = ['image', 'image_1', 'career_image', 'university_image', 'visa_image', 'documentation_image', 'financial_image', 'departure_image'];

        foreach ($imagelist as $image) {
            if ($country->$image != '') {
                $file = $country->$image;
                removeFile($file);
            }
        }

        $country->delete();

        return redirect()->route('country.index')->with('success', 'Room Deleted successfully.');
    }
}
