<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        dd($projects);

        return response()->json(
            [
                "success" => true,
                "data" => $projects
            ]
        );
    }

    public function show(Project $project)
    {
        $project->load('technologies', 'type');
        // dd($project);

        return response()->json([
            "success" => true,
            "data" => $project
        ]);
    }
}
