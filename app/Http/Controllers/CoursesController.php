<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Students;
use App\Notes;
use App\Notices;
use App\Courses;
use App\User_Profile;
use Validator;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $counters = DB::table('users')
    ->select('*', DB::raw('count(type) as total'))
    ->groupBy('type')
    ->get();
         $arr['courses']= Courses::all();
        return view('teacher.courses.index',compact('counters'))->with($arr);

        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


//note
    public function notes()
    {
       return view('teacher.notes.index');
    }


    public function uploadnotes(Request $request){



    }


//notice
     public function uploadnotices()
    {
       return view('teacher.notices.uploadnotices');
    }
      public function notices()
    {
        $arr['notices']= Notices::all();
       return view('teacher.notices.index')->with($arr);;
    }

}
