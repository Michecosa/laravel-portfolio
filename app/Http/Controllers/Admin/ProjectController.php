<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $technologies = Technology::all();
        $categories = Category::all();
        $types = Type::all();
        return view("admin.projects.create", compact('categories', 'types', 'technologies'));
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
        if(array_key_exists("cover_image", $data)) {
            $img_path = Storage::putFile('projects', $data['cover_image']);
            $newProject->cover_image = $img_path;
        }
        $newProject->category_id = $data['category_id'];
        $newProject->type_id = $data['type_id'];
        $newProject->is_completed = $request->has('is_completed');
        # dd($newProject);

        $newProject->save();

        # IMPORTANTE: SEMPRE DOPO $newProject->save()
        $newProject->technologies()->attach($data['technologies']);

        # ❌ return view("admin.projects.show", $newProject); 

        return redirect()->route("projects.show", $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        # dd($project->technologies);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $technologies = Technology::all();
        $categories = Category::all();
        $types = Type::all();
        $project = Project::find($id);
        return view("admin.projects.edit", compact("project", "categories", "types", "technologies"));
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

        if ($request->hasFile('cover_image')) {
            // Se esiste già un'immagine vecchia e non è un link URL, la cancello dal server
            if ($project->cover_image && !str_starts_with($project->cover_image, 'http')) {
                Storage::delete($project->cover_image);
            }
            // Salvo il nuovo file e aggiorno la colonna
            $img_path = Storage::put('projects', $request->cover_image);
            $project->cover_image = $img_path;
        }

        $project->category_id = $data['category_id'];
        $project->type_id = $data['type_id'];
        $project->is_completed = $request->has('is_completed');

        $project->update();

        if (isset($data['technologies'])) {
                $project->technologies()->sync($data['technologies']);
        } else {
            $project->technologies()->sync([]);
        }

        return redirect()->route("projects.show", $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Così cancello anche l'immagine dallo storage se non è un URL
        if ($project->cover_image && !str_starts_with($project->cover_image, 'http')) {
            Storage::delete($project->cover_image);
        }
        $project->technologies()->detach();
        $project->delete();

        return redirect()->route("projects.index");
    }
}
