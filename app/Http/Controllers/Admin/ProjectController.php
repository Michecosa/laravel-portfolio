<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $types = Type::all();
        return view("admin.projects.create", compact('categories', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        # dd($data);

        $newProject = new Project();

        $newProject->title = $data['title'];
        $newProject->description = $data['description'];
        $newProject->cover_image = $data['cover_image'];
        $newProject->category_id = $data['category_id'];
        $newProject->type_id = $data['type_id'];
        $newProject->is_completed = $request->has('is_completed');
        # dd($newProject);

        $newProject->save();

        # ❌ return view("admin.projects.show", $newProject); 

        return redirect()->route("projects.show", $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        dd($project->technologies);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $types = Type::all();
        $project = Project::find($id);
        return view("admin.projects.edit", compact("project", "categories", "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        # dd($data);

        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->cover_image = $data['cover_image'];
        $project->category_id = $data['category_id'];
        $project->type_id = $data['type_id'];
        $project->is_completed = $request->has('is_completed');

        $project->update();

        return redirect()->route("projects.show", $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("projects.index");
    }
}
