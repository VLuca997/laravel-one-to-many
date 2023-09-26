<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; // nostro import

use App\Models\Project; // import nostro model
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $projects = Project::all();
        return view('admin.index' , compact('projects'));
    }
    // public function projects(){
    //     return view('admin.project');
    // }
        

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $formData = $request->validated();
        $project = Project::create($formData);
        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.show' , compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $formData = $request->validated();
        $project->update([
            'title'=> $formData['title'],
            'description'=> $formData['description'],
            'category'=> $formData['category'],
        ]);

        return redirect()->route('admin.projects.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project = Project::destroy($project->id);
        return redirect()->route('admin.projects.index');
    }
}
