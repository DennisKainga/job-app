<?php

namespace App\Http\Controllers;

use App\Models\jobform;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_nature' => 'required|string|max:100',
            'company_name' => 'required|string|max:255',
            'job_salary' => 'required|string|max:50',
            'job_category' => 'required|array',
        ]);

        // Convert job_category array to JSON
        $validatedData['job_category'] = json_encode($validatedData['job_category']);


        // Save the job to the database
        jobform::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Job created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
