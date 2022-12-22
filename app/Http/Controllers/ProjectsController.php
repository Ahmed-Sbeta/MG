<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\User;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project::with('Worker')->get();
        // dd($projects);
        return view('projects.projects-grid',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role','=','employee')->get();
        return view('projects.add-project',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new project;
        $project->name= request('Pname');
        $project->description = request('Pdescription');
        $project->employer_id = request('employee')[0];
        $project->start = request('startDate');
        $project->end = request('endDate');
        $file = request()->file('file');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '', $name);
        $project->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
        $project->save();
        return redirect()->back()->with('success','project added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = project::find($id);
        return view('projects.projects-overview',compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = project::find($id);
        return view('projects.',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = project::find($id);
        $project->name= request('Pname');
        $project->description = request('Pdescription');
        $project->employer_id = request('employee')[0];
        $project->start = request('startDate');
        $project->end = request('endDate');
        $file = request()->file('file');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '', $name);
        $project->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
        $project->save();
        return redirect()->back()->with('success','project added successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = project::find($id);
        $projects->delete();
        return redirect()->back()->with('success','project deleted successfuly');

    }
}
