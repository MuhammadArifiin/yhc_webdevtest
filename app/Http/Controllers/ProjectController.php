<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Leader;
use App\Models\Project;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::get();
        $leaders = Leader::get();
        return view('projects.add', compact('clients', 'leaders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projects = new Project();
        $request->validate([
            'project_name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'progress' => 'required',
            'leader_id' => 'required',
            'client_id' => 'required'
        ]);

        $projects->project_name = $request->project_name;
        $projects->description = $request->description;
        $projects->start_date = $request->start_date;
        $projects->end_date = $request->end_date;
        $projects->progress = $request->progress;
        $projects->leader_id = $request->leader_id;
        $projects->client_id = $request->client_id;
        $projects->save();

        FacadesAlert::success('success', 'Berhasil menambahkan data');
        return redirect()->to('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.project', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $clients = Client::get();
        $leaders = Leader::get();
        return view('projects.edit', compact('project', 'clients', 'leaders'));
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
        $projects = Project::findOrFail($id);
        $request->validate([
            'project_name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'progress' => 'required',
            'leader_id' => 'required',
            'client_id' => 'required'
        ]);

        $projects->project_name = $request->project_name;
        $projects->description = $request->description;
        $projects->start_date = $request->start_date;
        $projects->end_date = $request->end_date;
        $projects->progress = $request->progress;
        $projects->leader_id = $request->leader_id;
        $projects->client_id = $request->kelas_id;
        $projects->update();

        FacadesAlert::success('success', 'Berhasil menambahkan data');
        return redirect()->to('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Project::findOrFail($id);
        $students->delete();

        FacadesAlert::success('success', 'Berhasil menghapus data');
        return redirect()->to('/projects');
    }
}
