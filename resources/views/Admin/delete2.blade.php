@extends('layouts.nav')

@section('deletehead')
	<meta charset="utf-8">
	<title>Edit page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="../../CSS/Css/style.css">
  <link rel="stylesheet" href="../../CSS/Bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
	@section('editbody')
	<div class="inner">
      
       <h3>Delete Info</h3>
           
          
          <div class="">
            Full Name:<input type="text" name="Full_Name" value="{{$teacher->Full_Name}}" class="">
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="">
            User ID:<input type="text" readonly name="user_id"  value="{{$teacher->user_id}}" class="">
            <i class="zmdi zmdi-id"></i>
          </div>
         
          <div class="">
           Password: <input type="password" name="password" value="{{$teacher->password}}"  class="">
            <i class="zmdi zmdi-lock"></i>
          </div>
          <div class="">
           Type: <input type="text" name="type" value="{{$teacher->type}}" class="">
            <i class="zmdi zmdi-type"></i>
          </div>
           <form method="post">
          
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="">
            ID:<input type="text" readonly name="id" value="{{$teacher->id}}" placeholder="Full Name" class="">
            <i class="zmdi zmdi-account"></i>
          </div>
          <button>Delete
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>

         <div>
          <a href="/AdminHome/admin" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Return</a>| <a href="/logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
         
      </div>
      </div>
@endsection