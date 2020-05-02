@extends('layouts.nav')
@section('changepasscss')
	<meta charset="utf-8">
	<title>Edit page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="../CSS/Css/style.css">
  <link rel="stylesheet" href="../CSS/Bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
	@section('changepass')
	<div class="inner">
      
        <form method="post">
          <h3>Change Password</h3>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-wrapper">
            ID:<input type="text" name="id" readonly value="{{request()->session()->get('user')->id}}" placeholder="Full Name" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          
          <div class="form-wrapper">
            Full Name:<input type="text" name="Full_Name" readonly value="{{request()->session()->get('user')->Full_Name}}" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="form-wrapper">
           Password: <input type="password" name="password" value=""  class="form-control">
            <i class="zmdi zmdi-lock"></i>
          </div>
          <button>Update
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>

         <div>
          <a href="{{route('admin.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back Home</a>| <a href="/logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
         
      </div>
      </div>
@endsection