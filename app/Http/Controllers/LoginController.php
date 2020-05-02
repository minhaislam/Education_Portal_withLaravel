<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function login(Request $req){
        $user = user::Where('user_id', $req->user_id)
        ->Where('password', $req->password)
        ->first();
    	
    	/*$user = DB::table('users')
                    ->where('email', $req['email'])
                    ->where('password', $req['password'])
                    ->first();*/
        
        if($user != null){
            $req->session()->put('user',$user);
            //$countadmin=DB::table('users')->where('type','admin')->count();
            $countadmin = user::where('type','admin')->count();
            $countstudent=user::where('type','student')->count();
            $countteacher=user::where('type','teacher')->count();
        	if($user->type=='admin'){
        		 //print($countadmin);                 
                return redirect()->route('admin.index',['totaladmin'=> $countadmin,'totalstudent'=> $countstudent,'totalteacher'=> $countteacher]);
        	}
        	elseif($user->type=='scout'){   

                return redirect()->route('scout.index');
        	}
        	elseif($user->type=='user'){    
                    
                return redirect()->route('user.index');
        	}
            
        }else{
            $req->session()->flash('msg', 'invalid username/password');
            //return view('login.index');
            return redirect('login.index');
        }
    }
}
