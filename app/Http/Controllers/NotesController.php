<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Notes;
use Validator;
use App\Courses;
use App\Students;
use Illuminate\Support\Facades\DB;;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(){
         
         $arr['notes']= Notes::paginate(20);
        return view('teacher.notes.index',compact('counters'))->with($arr);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $arr['courses'] = Courses::all();
        return view('teacher.notes.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Notes $notes)
    {    
          $this->validate( $request,[
           'title'=>'required| min:4',
            'course_id'=>'required',
             'image'=>'required'   ]);
          if(isset($request->image)&& $request->image->getClientOriginalName())
      {
        $ext=$request->image->getClientOriginalExtension();
        $file=date('YmdHis').rand(1,99999).'.'.$ext;
         $request->image->storeAs('public/notes',$file);
     } 
        else
        {
            $file= '';
        }
        $notes->nname = $file;
        $notes->ntitle = $request->title;
        $notes->cid = $request->course_id;
        $notes->save();
       return redirect()->route('teacher.notes.index');
    }

    /**
     * Display the specified resource
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cid,Notes $notes)
    { 

       $arr['notes'] = DB::table('Notes')->where('cid', $cid)->get();
      
       return view('teacher.notes.show')->with($arr);
         
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

        return view('teacher.notes.edit')->with($arr);
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
           'message'=>'required| max:240 |min:2'


          ]);
           $arr=Students::find($id);
           $arr->grade=$request->input('message');
           $arr->save();
            return redirect('/teacher/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Notes::destroy($id);
        return redirect('teacher/notes');
    }
}
