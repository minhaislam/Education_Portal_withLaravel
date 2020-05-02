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
            ID:<input type="text" readonly name="id" value="{{$teacher->id}}" placeholder="Full Name" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          
          <div class="form-wrapper">
            Full Name:<input type="text" name="Full_Name" value="{{$teacher->Full_Name}}" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="form-wrapper">
            User ID:<input type="text" readonly name="user_id"  value="{{$teacher->user_id}}" class="form-control">
            <i class="zmdi zmdi-id"></i>
          </div>
         
          <div class="form-wrapper">
           Password: <input type="password" name="password" value="{{$teacher->password}}"  class="form-control">
            <i class="zmdi zmdi-lock"></i>
          </div>
          <div class="form-wrapper">
           Type: <input type="text" name="type" value="{{$teacher->type}}" class="form-control">
            <i class="zmdi zmdi-type"></i>
          </div>
          <button>Update
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>

         <div>
          <a href="/AdminHome/admin" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Return</a>| <a href="/logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
         
      </div>
      </div>
@endsection