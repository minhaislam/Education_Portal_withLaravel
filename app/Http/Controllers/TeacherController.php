<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\User_Profile;
use Validator;
use App\Notes;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
   public function index(){
         $counters = DB::table('users')
    ->select('*', DB::raw('count(type) as total'))
    ->groupBy('type')
    ->get();
    	return view('teacher.index',compact('counters'));
    }

}
