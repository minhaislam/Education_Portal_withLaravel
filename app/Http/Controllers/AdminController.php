<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Students;
use App\Notes;
use App\Notices;
use App\Courses;
use App\User_Profile;
use Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
     public function index(){
         $counters = DB::table('users')
    ->select('*', DB::raw('count(type) as total'))
    ->groupBy('type')
    ->get();
    	return view('Admin.index',compact('counters'));
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
             $users = DB::table('users')
                        ->where('user_id',$validated['user_id'])->pluck('id');
                        //dd($users[0]);
            $Addasforeign = User_Profile::firstOrCreate(['user_id' => $users[0]]);
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

    public function edit($id){

        $user = DB::table('users')->find($id);  
        return view('Admin.edit', ['admin' => $user]);   
    }

    public function confirmedit($id, Request $req){
       $update= DB::table('users')
            ->where('id', $id)
            ->update(['Full_Name' => $req->Full_Name, 'user_id' => $req->user_id, 'password' => $req->password,'type' => $req->type]);

             if($update){
            return redirect()->route('admin.admin')->with('message','done');
        }else{
            return redirect()->route('admin.admin')->with('message','Not done');
        }

    }

    public function delete($id){

        $user = DB::table('users')->find($id);  
        return view('Admin.delete', ['admin' => $user]);   
    }

    public function confirmdelete($id, Request $req){
         $delete=DB::table('users')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('admin.admin');
        }else{
            return redirect()->route('admin.admin');
        }

    }


    public function edit2($id){

        $user = DB::table('users')->find($id);  
        return view('Admin.edit2', ['teacher' => $user]);   
    }

    public function confirmedit2($id, Request $req){
       $update= DB::table('users')
            ->where('id', $id)
            ->update(['Full_Name' => $req->Full_Name, 'user_id' => $req->user_id, 'password' => $req->password,'type' => $req->type]);

             if($update){
            return redirect()->route('admin.teacher')->with('message','done');
        }else{
            return redirect()->route('admin.teacher')->with('message','Not done');
        }

    }

    public function delete2($id){

        $user = DB::table('users')->find($id);  
        return view('Admin.delete2', ['teacher' => $user]);   
    }

    public function confirmdelete2($id, Request $req){
         $delete=DB::table('users')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('admin.teacher');
        }else{
            return redirect()->route('admin.teacher');
        }

    }
public function edit1($id){

        $user = DB::table('users')->find($id);  
        return view('Admin.edit1', ['student' => $user]);   
    }

    public function confirmedit1($id, Request $req){
       $update= DB::table('users')
            ->where('id', $id)
            ->update(['Full_Name' => $req->Full_Name, 'user_id' => $req->user_id, 'password' => $req->password,'type' => $req->type]);

             if($update){
            return redirect()->route('admin.student')->with('message','done');
        }else{
            return redirect()->route('admin.student')->with('message','Not done');
        }

    }

    public function delete1($id){

        $user = DB::table('users')->find($id);  
        return view('Admin.delete1', ['student' => $user]);   
    }

    public function confirmdelete1($id, Request $req){
         $delete=DB::table('users')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('admin.student');
        }else{
            return redirect()->route('admin.student');
        }

    }

    public function changepass(){
         
        return view('Admin.changepass');   
    }

    public function confirmpass(Request $req){
         $updatepass = user::where('id',$req->id)
                        ->where('Full_Name',$req->Full_Name)
                        ->update(['password'=> $req->password ]);
        return redirect('/logout');  
    }

    public function profile($id){

        $user = DB::table('users')->find($id);  
        $user_profile = DB::table('user_profiles')->where('user_id',$id)->first();
        return view('Admin.profile', ['user' => $user,'user_profile' => $user_profile]);   
    }

    public function editprofile($id){

       
        $user = DB::table('users')->where('id',$id)->first(); 
         $user_profile = DB::table('user_profiles')->where('user_id',$id)->first();  
       
            return view('Admin.editprofile', ['user' => $user,'user_profile' => $user_profile]);  
      
        
    }


    public function editconfirm($id, Request $req){
       $update= DB::table('user_profiles')
            ->where('user_id', $id)
            ->update(['email' => $req->email, 'phone' => $req->phone, 'address' => $req->address,'department' => $req->department,'cgpa' => $req->cgpa,'passing_year'=> $req->passing_year,'eduction'=> $req->eduction]);

             if($update){
            return redirect()->route('admin.profile',[$id])->with('message','done');
        }else{
            return redirect()->route('admin.profile',[$id])->with('message','Not done');
        }

    }

    public function search(){
        $data = user::orderBy('user_id', 'asc');

        if (request()->value != '') {
            $data->where('user_id', request()->value);
           
        }
        
        return view('admin.searchresult', ['searchresult' => $data->get() ]);
       
    
    }

}
