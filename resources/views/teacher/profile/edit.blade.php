@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Dashbord</a></li>
              <li class="breadcrumb-item active">Add Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>

 <section class="content">
      <div class="container-fluid">	
      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
     <form method="post" enctype="multipart/form-data" class="" action="{{route('teacher.profile.update',$profile->id)}}">
     	@method('PUT')
      <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="form-group">
        
        <div class="row">
          <label class="col-md-3">User Id</label>
          <div class="col-md-3"><input type="textarea" readonly="active" value="{{$profile->user_id}}" name="user_id" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
        <div class="row">
          <label class="col-md-3">Full Name</label>
          <div class="col-md-3"><input type="textarea" value="{{$profile->Full_Name}}" name="fullname" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
         <div class="row">
          <label class="col-md-3">Password</label>
          <div class="col-md-3"><input type="password" value="{{$profile->password}}" name="password" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
        <div class="row">
          <label class="col-md-3">ReenterPassword</label>
          <div class="col-md-3"><input type="password" value="{{$profile->password}}" name="password_confirmation" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
        <div class="row">
          <label class="col-md-3">Type</label>
          <div class="col-md-3"><input type="textarea" readonly="active" value="{{$profile->type}}" name="type" class="form-control"></div>
          <div class="clearfix"></div>
        </div>

    </div>
           <div class="form-group">
        <input type="submit" value="submit" name="" class="btn btn-primary" >
       </div>
     </form>
   
     </div>
</section>
@endsection