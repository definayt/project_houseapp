<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\Project;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notes = Notes::select('id', 'description')
                        ->where('notes.id', '=', $id)
                        ->first();


	    return response()->json([
	      'data' => $notes
	    ]);
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
        $id_project = Notes::select('project_id')
                        ->where('id','=',$id)
                        ->first()->project_id;
        $notes = Notes::find($id);
        $notes->timestamps = false;
        $notes->description = $request->description;
        $notes->save();
     
        return response()->json([ 'success' => true, 'url'=> redirect()->to('project/notes/'.$id_project)->with('success','Notes berhasil dihapus') ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;

        $id_project = Notes::select('project_id')
                        ->where('id','=',$id)
                        ->first()->project_id;
		Notes::where('id',$id)->delete();
        
		return redirect()->to('project/notes/'.$id_project)->with('success','Notes berhasil dihapus'); 
	
    }
}
