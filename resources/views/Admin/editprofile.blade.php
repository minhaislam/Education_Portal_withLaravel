@extends('layouts.nav')

@section('edithead')
	<meta charset="utf-8">
	<title>Edit page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="../../CSS/Css/style.css">
  <link rel="stylesheet" href="../../CSS/Bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
	@section('editbody')
  

   

      <div class="inner">
      
        <form method="post">
          <h3>Edit Info</h3>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-wrapper">
            ID:<input type="text" readonly name="id" value="{{$user_profile->id}}" placeholder="id" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="form-wrapper">
            Email:<input type="text"  name="email" value="{{$user_profile->email}}" placeholder="email" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          
          <div class="form-wrapper">
            Phone:<input type="text" name="phone" value="{{$user_profile->phone}}" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="form-wrapper">
            Address:<input type="text" name="address" value="{{$user_profile->address}}" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          @if($user->type=='student' or $user->type=='teacher')
         <div class="form-wrapper">
            Department:<input type="text" name="department" value="{{$user_profile->department}}" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          @elseif($user->type=='student')
          <div class="form-wrapper">
            CGPA:<input type="text" name="cgpa" value="{{$user_profile->cgpa}}" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="form-wrapper">
            Passing Year:<input type="text" name="passing_year" value="{{$user_profile->passing_year}}" class="form-control">
            </div>
            
            @elseif($user->type=='admin' or $user->type=='teacher')
            <div class="form-wrapper">
            Education:<input type="text" name="eduction" value="{{$user_profile->eduction}}" class="form-control">
            </div>
            @endif
          <div class="form-wrapper">
            User Id:<input type="text" name="user_id" value="{{$user_profile->user_id}}" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>

       
          <button class="btn btn-primary btn-lg active">Update
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>

         <div>
          <a href="{{route('admin.profile', $user->id)}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Return</a>| <a href="/logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
         
      </div>
      </div>

     
@endsection