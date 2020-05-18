<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Students;
use App\User_Profile;
use Validator;
use App\Courses;
use App\Notes;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    
       $arr['students']= Students::paginate(10);
        return view('teacher.students.index',compact('counters'))->with($arr);

        
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
    public function search()
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
    public function show($cid)
    {
        $arr['students'] = DB::table('Students')->where('cid', $cid)->get();
      // echo $arr['notes'];
       return view('teacher.students.show')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
          $arr['students']= Students::find($id);
        return view('teacher.students.edit')->with($arr);
    }
    public function editmessage($id)
    {
        
          $arr['students']= Students::find($id);
        return view('teacher.students.edit')->with($arr);
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
        
           $this->validate( $request,[
           'mark'=>'required| max:2'


          ]);
           $arr=Students::find($id);
           $arr->marks=$request->input('mark');
           $arr->save();
            return redirect('teacher/students');
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

}
