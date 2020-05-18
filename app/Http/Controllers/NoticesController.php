<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Notes;
use App\Notices;
use App\Courses;
use Validator;
use Illuminate\Support\Facades\DB;;

class NoticesController extends Controller
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
         $arr['notices']= Notices::all();
        return view('teacher.notices.index',compact('counters'))->with($arr);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $arr['courses'] = Courses::all();
       return view('teacher.notices.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Notices $notices)
    {
        $this->validate( $request,[
           'notice'=>'required |min:6',
            'course_id'=>'required'
              ]);
        $notices->noticename= $request->notice;
        $notices->cid = $request->course_id;
        $notices->save();
        return redirect('teacher/notices');
    }

           
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cid,Notices $notices)
    {
       $arr['notices'] = DB::table('Notices')->where('cid', $cid)->get();
      // echo $arr['notes'];
       return view('teacher.notices.show')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
          $arr['notice']= Notices::find($id);
        return view('teacher.notices.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

           $this->validate( $request,[
           'notice'=>'required| min:6'


          ]);
           $arr=Notices::find($id);
           $arr->noticename=$request->input('notice');
           echo $arr;
           $arr->save();
            return redirect('teacher/notices');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notices::destroy($id);
        return redirect()->route('teacher.notices.index')->with('ststus','Notices deleted');
    
    }
}
