<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


      


        // $url = "https://sahityatalk.co.in/login";
        // $url = "http://localhost:8000/redirect/complete?pid=123&uid=456";

        // $parsedUrl = parse_url($url);
        // $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
        // $query = isset($parsedUrl['query']) ? '?' . $parsedUrl['query'] : '';
        // $relativeUrl = $path . $query;
        // return $relativeUrl;  
        
        $project = Project::orderby('is_active','desc')->orderby('id','desc')->get();
        $fullData = compact('project');
        return view('admin.project.index')->with($fullData);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:projects',
        ]);

      



        $exam = $request->edit_id ? Project::find($request->edit_id) : new Project;
        $exam->name = $request->name;
        $exam->save();
        return redirect('project');
    }


    public function show($id)
    {

        return   $this->recordShow($id, Project::class);
    }

    public function is_Active(Request $request)
    {
        
        return $this->toggleIsActiveStaus($request, Project::class);
    }

    public function DeleteActive(Request $request)
    {
        return $this->deleteStatus($request, Project::class);
    }
}
