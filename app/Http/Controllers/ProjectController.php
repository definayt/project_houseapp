<?php

namespace App\Http\Controllers;

use App\Models\PhotoProgress;
use App\Models\Progress;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $dataProject = Project::select('id', 'project_name')
                           ->where('id', '=', $id)
                           ->first();

        return view('project_detail', ['data_project' => $dataProject]); 
    }

    public function time_schedule($id)
    {
        $dataProject = Project::select('id', 'rab_file')
                           ->where('id', '=', $id)
                           ->first();

        return view('time_schedule', ['data_project' => $dataProject]); 
    }

    public function twodimension($id)
    {
        $dataProject = Project::select('id', 'twod_file')
                           ->where('id', '=', $id)
                           ->first();

        return view('2d', ['data_project' => $dataProject]); 
    }

    public function threedimension($id)
    {
        $dataProject = Project::select('id', 'threed_link', 'animation_video')
                           ->where('id', '=', $id)
                           ->first();

        return view('3d', ['data_project' => $dataProject]); 
    }

    public function doc_house($id)
    {
        $dataProject = Project::select('id', 'agreement_doc', 'spec_doc')
                           ->where('id', '=', $id)
                           ->first();

        return view('doc_house', ['data_project' => $dataProject]); 
    }

    public function rab($id)
    {
        $dataProject = Project::select('id', 'rab_file')
                           ->where('id', '=', $id)
                           ->first();

        return view('rab', ['data_project' => $dataProject]); 
    }

    public function house_profile($id)
    {
        $dataProject = Project::select('id', 'location', 'type', 'building_area', 'land_area', 'house_spec', 'floors', 'work_duration', 'rab')
                           ->where('id', '=', $id)
                           ->first();

        $manager_id = Project::select('manager_id')
                           ->where('id', '=', $id)
                           ->first();

        $dataManager = User::select('name', 'phone_number')
                           ->where('id', '=', $manager_id->manager_id)
                           ->first();

        $owner_id = Project::select('owner_id')
                           ->where('id', '=', $id)
                           ->first();

        $dataOwner = User::select('name', 'phone_number')
                           ->where('id', '=', $owner_id->owner_id)
                           ->first();

        $pengawas_id = Project::select('pengawas_id')
                           ->where('id', '=', $id)
                           ->first();

        $dataPengawas = User::select('name', 'phone_number')
                           ->where('id', '=', $pengawas_id->pengawas_id)
                           ->first();

        return view('house_profile', ['data_project' => $dataProject, 'data_owner' => $dataOwner, 'data_manager' => $dataManager, 'data_pengawas' => $dataPengawas]); 
    }

    public function progress($id)
    {
        $dataProject = Project::select('id', 'working_status', 'start_date', 'end_date', 'work_duration')
                           ->where('id', '=', $id)
                           ->first();
                           
                           
        $dataProject->start_date = Carbon::parse($dataProject->start_date)->isoFormat('D MMMM Y');
        $dataProject->end_date = Carbon::parse($dataProject->end_date)->isoFormat('D MMMM Y');

        $dataProgress = Progress::select('progress.id','date','file_photo')
                            ->join('photo_progress','progress.id','=','photo_progress.progress_id')
                            ->where('progress.project_id', '=', $id)
                            ->groupBy('progress.id')
                            ->orderBy('date', 'DESC')
                            ->get();  
                            
        foreach($dataProgress as $progress){
            $progress->date = Carbon::parse($progress->date)->isoFormat('D MMMM Y');
        }

        return view('progress', ['data_project' => $dataProject, 'data_progress'=>$dataProgress]); 
    }

    public function progress_detail($id)
    {
    	$photo_progress = PhotoProgress::select('*')
                        ->where('progress_id', '=', $id)
                        ->get();

	    return response()->json([
	      'data' => $photo_progress
	    ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
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
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
