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
        
           
        	if($user->type=='admin'){
                //dd($user);
        		 //print($countadmin);                 
                return redirect()->route('admin.index');
        	}
        	elseif($user->type=='teacher'){   

                //return redirect()->route('scout.index');
        	}
        	elseif($user->type=='student'){    
                    
                //return redirect()->route('user.index');
                print_r('Student pasge havent created');
        	}
            
        }else{
            $req->session()->flash('msg', 'invalid username/password');
            //return view('login.index');
            return redirect('login.index');
        }
    }
}
