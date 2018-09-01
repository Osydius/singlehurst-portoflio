<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\ProjectStoreRequest;

class ProjectsController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);

        parent::__construct();
    }

    public function index() {
        $projects = Project::all();

        return view('Projects.index', compact('projects'));
    }

    public function create() {
        return view('Projects.create');
    }

    public function store(ProjectStoreRequest $request) {

        Project::create(
            request(
                [
                    'name',
                    'body',
                    'description',
                    'video_url',
                    'github_url',
                ]
            )
        );

        return redirect(route('projects.index'));
    }

    public function show(Project $project) {
        return view('Projects.show', compact('project'));
    }

    public function edit(Project $project) {
        return view('Projects.edit', compact('project'));
    }

    public function update(Project $project) {
        dd($project);
    }

    public function destroy(Project $project) {
        dd($project);
    }
}
