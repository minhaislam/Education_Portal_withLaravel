@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Notices</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('teacher.index')}}">Dashbord</a></li>
              <li class="breadcrumb-item active">Add Notices</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>

 <section class="content">
      <div class="container-fluid">	
        <a href="{{route('teacher.courses.index')}}" class="btn btn-primary" >Back</a>
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
     <form method="Post" enctype="multipart/form-data" class="" 
     action="{{route('teacher.notes.update',$students->id)}}">
     	@method('PUT')
      <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="form-group">
        <div class="row">
          <label class="col-md-3">Last message</label>
          <div class="col-md-3">
            <input type="textarea" value="{{$students->grade}}" name="message" class="form-control">
          </div>
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