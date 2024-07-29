<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|max:40',
            'language' => 'required|max:60',
            'content' => 'required',
            'started_on' => 'required|date',
            'finished' => 'required|boolean',
            'image_url' => 'required',
            'website_url' => 'required',
        ]);
        $newProject = Project::create($data);
        return redirect()->route('admin.projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // $singleProject = Project::find($id);
        // dd($project);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // $singleProject = Project::find($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $request->validate([
            'title' => 'required|max:40',
            'language' => 'required|max:60',
            'content' => 'required',
            'started_on' => 'required|date',
            'finished' => 'required|boolean',
            'image_url' => 'required',
            'website_url' => 'required',
        ]);
        $project->update($data);
        return redirect()->route('admin.projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
