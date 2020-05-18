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
<?php
                 $segments=Request::segment(2);
               ?>
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
     <form method="Post" enctype="multipart/form-data" class="" 
     action="{{route('teacher.students.update',$students->id)}}">
      @method('PUT')
      <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="form-group">
        <div class="row">
          <label class="col-md-3">Student Id</label>
          <div class="col-md-3"><input readonly="active" value="{{$students->sid}}" type="textarea" name="notice" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
          <label class="col-md-3">Mark</label>
          <div class="col-md-3"><input value="{{$students->marks}}" type="textarea" name="mark" class="form-control"></div>
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

