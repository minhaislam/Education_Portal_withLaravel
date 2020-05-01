<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
     public function index(){
    	return view('Admin.index');
    }

     public function StudentList(){
     	$users = DB::table('users')->get();
        return view('Admin.student', ['students' => $users]);
    
    }

    public function AdminList(){
     	$users = DB::table('users')->get();
        return view('Admin.admin', ['admins' => $users]);
    
    }

    public function TeacherList(){
     	$users = DB::table('users')->get();
        return view('Admin.teacher', ['teachers' => $users]);
    
    }
    public function AddNew(){
        return view('Admin.addnew');
    
    }
    public function AddNew1(){
        return view('Admin.addnew1');
    
    }
    public function AddNew2(){
        return view('Admin.addnew2');
    
    }

    public function InsertNew(Request $req){

       $validated = $req->validate([
        'Full_Name'=>'required',
            'user_id'=>'required',
            'password'=>'required',
            'type'=>'required',
    ]);
        

         $register = new user();
        $register->Full_Name=$validated['Full_Name'];
        $register->user_id=$validated['user_id'];
        $register->password=$validated['password'];
        $register->type=$validated['type'];
        //$register = DB::table('users')->insertGetId($validated);
                         
        if($register->save()){
            return redirect()->route('admin.admin');

       }else{
           return redirect()->route('admin.admin');
        }
        
    
    }

public function InsertNew1(Request $req){

       $validated = $req->validate([
        'Full_Name'=>'required',
            'user_id'=>'required',
            'password'=>'required',
            'type'=>'required',
    ]);
        

         $register = new user();
        $register->Full_Name=$validated['Full_Name'];
        $register->user_id=$validated['user_id'];
        $register->password=$validated['password'];
        $register->type=$validated['type'];
        //$register = DB::table('users')->insertGetId($validated);
                         
        if($register->save()){
            return redirect()->route('admin.student');

       }else{
           return redirect()->route('admin.student');
        }
        
    
    }

    public function InsertNew2(Request $req){

       $validated = $req->validate([
        'Full_Name'=>'required',
            'user_id'=>'required',
            'password'=>'required',
            'type'=>'required',
    ]);
        

         $register = new user();
        $register->Full_Name=$validated['Full_Name'];
        $register->user_id=$validated['user_id'];
        $register->password=$validated['password'];
        $register->type=$validated['type'];
        //$register = DB::table('users')->insertGetId($validated);
                         
        if($register->save()){
            return redirect()->route('admin.teacher');

       }else{
           return redirect()->route('admin.teacher');
        }
        
    
    }

}
