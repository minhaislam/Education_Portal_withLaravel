<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Students;
use App\User_Profile;
use Validator;
use App\Notes;
use App\Notices;
use Illuminate\Support\Facades\DB;;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
        
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
    public function show($user_id)
    {
       
       $arr['users'] = DB::table('Users')->where('user_id', $user_id)->get();
      // echo $arr['notes'];
       return view('teacher.profile.show')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        
        $arr['profile']= User::find($user_id);
      return view('teacher.profile.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$user_id)
    {   
         $this->validate( $request,[
           'fullname'=>'required|min:3',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
'password_confirmation' => 'min:6'

          ]);
          $arr= User::find($user_id);
           $arr->Full_Name=$request->input('fullname');
           $arr->password=$request->input('password');
           echo $arr;
           $arr->save();
            return redirect('teacher');
    
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
