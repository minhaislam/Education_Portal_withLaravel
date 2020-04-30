<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
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
}
