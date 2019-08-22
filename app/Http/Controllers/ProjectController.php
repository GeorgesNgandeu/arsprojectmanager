<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectFormRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addProject');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectFormRequest $request)
    {
        //dd($request->workfile);

        //return $request;
        //get name from the form
        $name = $request->get('name');

        //get description from the form
        $description = $request->get('description');

        //get startdate from the form
        $startdate = $request->get('startdate');

        //get the logo from the form
        $logo = $request->file('logo');

        //get the workfile from the form
        $workfile = $request->file('workfile');

        if($logo && $workfile){
            //get extension, rename, move the file
            $dir1 = 'videos_sticker';
            $dir2 = 'app_videos';
            $logo_extension = strtolower($logo->getClientOriginalName());
            $workfile_extension = strtolower($workfile->getClientOriginalName());
            $logoname = str_random().'.'. $logo_extension;
            $workfilename = str_random().'.'. $workfile_extension;
            $logo->move($dir1, $logoname);
            $workfile->move($dir2, $workfilename);

            //get the user
            $user = User::where('email', Auth::user()->name);

            //create a new project
            $project = new Project();
            $project->name = $name;
            $project->description = $description;
            $project->logo = $logo;
            $project->workfile = $workfile;
            $project->save();

            //assign the video to the subcategory
            $user->projects()->associate($project);

            return redirect('/main');
        }

        return redirect('/main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
