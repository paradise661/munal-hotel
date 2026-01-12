<?php

namespace App\Http\Controllers\admin;

use App;
use App\Models\Enquiries;
use App\Models\Result;
use App\Models\DailyVisit;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::with('student')->get();
        return view('admin.application.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Enquiries::findOrFail($request->student_id);
        Application::updateOrCreate([
            'student_id' => $request->student_id,
        ], [
            'status' => 'processing',
        ]);

        return redirect()->route('application.index')->with('success', 'Application status updated successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $application = Application::with('student')->findOrFail($id);
        return view('admin.application.show', compact('application'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $application = Application::findOrFail($id);
        $result = Result::where('application_id', $application->id)->first();
        if ($application->status !== 'apply' && $request->status === 'apply' && !$result) {
            Result::create([
                'application_id' => $application->id,
                'status' => 'apply',
            ]);

            $application->update(['status' => 'apply']);
        }
        // ✅ For other status changes
        elseif ($application->status !== $request->status) {
            $application->update(['status' => $request->status]);
        }

        return redirect()->route('application.index')->with('success', 'Application updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $application = Application::findOrFail($id);
        $application->delete();

        return redirect()->route('application.index')->with('success', 'Application withdrawn successfully.');
    }
}
