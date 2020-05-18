<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\AccessValidtion;
use App\user;
use App\User_Profile;
use Illuminate\Support\Facades\DB;
class ForgetPassController extends Controller
{
    public function index(){
    	return view('ForgetPass.index');
    }
     public function submit(Request $req){
     	$user=DB::table('users')->where('user_id', $req->user_id)->first();
     	$email=DB::table('user_profiles')->where('email', $req->email)->first();
     	if($user and $email){
     		$update= DB::table('users')
     		->where('id', $user->id)
            ->update(['password'=> rand(1,4000)])
            ;
            if ($update) {
            	$userpass=DB::table('users')->where('user_id',$req->user_id)->first();
            	 return redirect()->route('forgetpass.newpass',[$userpass->id]);
            }
           
     	}
    	
    }
     public function password($id){
     	$userpass=DB::table('users')->where('id',$id)->first();
    	return view('ForgetPass.password',['userpass' => $userpass]);
    }
}
