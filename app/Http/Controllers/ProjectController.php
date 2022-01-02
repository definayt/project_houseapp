<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\PhotoProgress;
use App\Models\Progress;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $dataProject = Project::select('id', 'project_name', 'manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
                           ->where('id', '=', $id)
                           ->first();
        if(Auth::user()->id==$dataProject->manager_id || Auth::user()->id==$dataProject->owner_id || 
            Auth::user()->id==$dataProject->pengawas_id || Auth::user()->id==$dataProject->lapangan_id){
            return view('project_detail', ['data_project' => $dataProject]); 
        }else{
            return view('no_access');
        }
    }

    public function time_schedule($id)
    {
        $dataProject = Project::select('id', 'rab_file', 'manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
                           ->where('id', '=', $id)
                           ->first();
        if(Auth::user()->id==$dataProject->manager_id || Auth::user()->id==$dataProject->owner_id || 
            Auth::user()->id==$dataProject->pengawas_id || Auth::user()->id==$dataProject->lapangan_id){
                return view('time_schedule', ['data_project' => $dataProject]);
        }else{
            return view('no_access');
        }
    }

    public function twodimension($id)
    {
        $dataProject = Project::select('id', 'twod_file', 'manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
                           ->where('id', '=', $id)
                           ->first();
        if(Auth::user()->id==$dataProject->manager_id || Auth::user()->id==$dataProject->owner_id || 
            Auth::user()->id==$dataProject->pengawas_id || Auth::user()->id==$dataProject->lapangan_id){
            return view('2d', ['data_project' => $dataProject]); 
        }else{
            return view('no_access');
        }        
    }

    public function threedimension($id)
    {
        $dataProject = Project::select('id', 'threed_link', 'animation_video', 'manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
                           ->where('id', '=', $id)
                           ->first();
        if(Auth::user()->id==$dataProject->manager_id || Auth::user()->id==$dataProject->owner_id || 
            Auth::user()->id==$dataProject->pengawas_id || Auth::user()->id==$dataProject->lapangan_id){
            return view('3d', ['data_project' => $dataProject]); 
        }else{
            return view('no_access');
        }
        
    }

    public function doc_house($id)
    {
        $dataProject = Project::select('id', 'agreement_doc', 'spec_doc', 'manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
                           ->where('id', '=', $id)
                           ->first();
        if(Auth::user()->id==$dataProject->manager_id || Auth::user()->id==$dataProject->owner_id || 
            Auth::user()->id==$dataProject->pengawas_id || Auth::user()->id==$dataProject->lapangan_id){
            return view('doc_house', ['data_project' => $dataProject]); 
        }else{
            return view('no_access');
        }
    }

    public function rab($id)
    {
        $dataProject = Project::select('id', 'rab_file', 'manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
                           ->where('id', '=', $id)
                           ->first();
        if(Auth::user()->id==$dataProject->manager_id || Auth::user()->id==$dataProject->owner_id || 
            Auth::user()->id==$dataProject->pengawas_id || Auth::user()->id==$dataProject->lapangan_id){
            return view('rab', ['data_project' => $dataProject]); 
        }else{
            return view('no_access');
        }
    }

    public function house_profile($id)
    {
        $dataProject = Project::select('id', 'location', 'type', 'building_area', 'land_area', 'house_spec', 'floors', 'work_duration', 'rab', 'manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
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
        if(Auth::user()->id==$dataProject->manager_id || Auth::user()->id==$dataProject->owner_id || 
            Auth::user()->id==$dataProject->pengawas_id || Auth::user()->id==$dataProject->lapangan_id){
            return view('house_profile', ['data_project' => $dataProject, 'data_owner' => $dataOwner, 'data_manager' => $dataManager, 'data_pengawas' => $dataPengawas]); 
        }else{
            return view('no_access');
        }
    }

    public function progress($id)
    {
        $dataProject = Project::select('id', 'working_status', 'start_date', 'end_date', 'work_duration', 'manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
                           ->where('id', '=', $id)
                           ->first();

        $start = strtotime($dataProject->start_date);
        if (strtotime(Carbon::now()) > strtotime($dataProject->end_date)){
            $end = strtotime($dataProject->end_date);
        }else{
            $end = strtotime(Carbon::now());
        }
        
        $count = 0;
        while(date('Y-m-d', $start) < date('Y-m-d', $end)){
            $count += date('N', $start) < 6 ? 1 : 0;
            $start = strtotime("+1 day", $start);
        }
        
                           
                           
        $dataProject->start_date = Carbon::parse($dataProject->start_date)->isoFormat('D MMMM Y');
        $dataProject->end_date = Carbon::parse($dataProject->end_date)->isoFormat('D MMMM Y');

        $dataProgress = Progress::select('progress.id','date','file_photo', 'manager_id', 'pengawas_id', 'acc_manager', 'acc_pengawas')
                            ->join('photo_progress','progress.id','=','photo_progress.progress_id')
                            ->join('project', 'project.id','=','progress.project_id')
                            ->where('progress.project_id', '=', $id)
                            ->groupBy('progress.id')
                            ->orderBy('date', 'DESC')
                            ->get();  
        
        
        $dataProgressACC = [];
        foreach($dataProgress as $data) {
            if($data->pengawas_id != null){
                if($data->acc_manager== 1 && $data->acc_pengawas==1){
                    $dataProgressACC[] = [
                        'id' => $data->id,
                        'date' => Carbon::parse($data->date)->isoFormat('D MMMM Y'),
                        'file_photo' => $data->file_photo
                    ];
                }
            }else{
                if($data->acc_manager== 1){
                    $dataProgressACC[] = [
                        'id' => $data->id,
                        'date' => Carbon::parse($data->date)->isoFormat('D MMMM Y'),
                        'file_photo' => $data->file_photo
                    ];
                }
            }
            
        }
        
        if(Auth::user()->id==$dataProject->manager_id || Auth::user()->id==$dataProject->owner_id || 
            Auth::user()->id==$dataProject->pengawas_id || Auth::user()->id==$dataProject->lapangan_id){
            return view('progress', ['data_project' => $dataProject, 'data_progress'=>$dataProgressACC, 'hari_ke'=>$count]); 
        }else{
            return view('no_access');
        }
    }

    public function progress_detail($id)
    {
    	$photo_progress = PhotoProgress::select('file_photo', 'desc')
                        ->where('progress_id', '=', $id)
                        ->get();


	    return response()->json([
	      'data' => $photo_progress
	    ]);
    }

    public function notes($id)
    {
        $dataProject = Notes::select('notes.id', 'project_id', 'creator_id', 'date', 'description', 'users.name')
                            ->join('users','users.id','=','notes.creator_id')
                           ->where('project_id', '=', $id)
                           ->orderBy('notes.id')
                           ->get();

        foreach ($dataProject as $project){
            $project->date = Carbon::parse($project->date)->isoFormat('D MMMM Y');
        }

        $data_project = Project::select('manager_id', 'owner_id', 'pengawas_id', 'lapangan_id')
                        ->where('id', '=', $id)
                        ->first();

        if(Auth::user()->id==$data_project->manager_id || Auth::user()->id==$data_project->owner_id || 
            Auth::user()->id==$data_project->pengawas_id || Auth::user()->id==$data_project->lapangan_id){
            return view('notes', ['data_project' => $dataProject, 'project_id'=>$id]); 
        }else{
            return view('no_access');
        }
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
