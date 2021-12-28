<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role_id === 1){
            $dataProject = Project::select('id', 'project_name')
                           ->where('manager_id', '=', Auth::user()->id)
                           ->get();
        }elseif(Auth::user()->role_id === 2){
            $dataProject = Project::select('id', 'project_name')
                           ->where('owner_id', '=', Auth::user()->id)
                           ->get();
        }elseif(Auth::user()->role_id === 3){
            $dataProject = Project::select('id', 'project_name')
                           ->where('pengawas_id', '=', Auth::user()->id)
                           ->get();
        }else{
            $dataProject = Project::select('id', 'project_name')
                           ->where('lapangan_id', '=', Auth::user()->id)
                           ->get();
        }
        
        return view('home', ['data_project' => $dataProject]);
    }
}
