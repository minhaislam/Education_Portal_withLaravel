@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Teacher</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>


 <section class="content">
      <div class="container-fluid">
      	<p>
      		<a href="{{route('teacher.index')}}" class="btn btn-primary" >Back</a>
      		<a href="{{route('teacher.profile.edit',request()->session()->get('user')->id)}}" class="btn btn-primary" >Edit</a>
      	</p>
   @foreach($users as $c)

   
   	<label>User Id  :</label>{{$c->user_id}}<br>
   	<label>Full Name:</label>{{$c->Full_Name}}<br>
   	<label>Password :</label>{{$c->password}}<br>
   	<label>Type     :</label>{{$c->type}}</br>
   
   @endforeach
      
   
     </div>
</section>
@endsection