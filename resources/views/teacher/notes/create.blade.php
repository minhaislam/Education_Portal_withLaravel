@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add News </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('teacher.index')}}">Dashbord</a></li>
              <li class="breadcrumb-item active"><a href="{{route('teacher.courses.index')}}"> Course</a></li>
              <li class="breadcrumb-item active"><a href=""> Upload Note</a></li>
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
     <form method="post" enctype="multipart/form-data" class="" action="{{route('teacher.notes.store')}}">
       <a href="{{route('teacher.courses.index')}}" class="btn btn-primary" >Back</a>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="form-group">
        <div class="row">
          <label class="col-md-3">Title</label>
          <div class="col-md-3"><input type="text" name="title" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
    </div>
         <div class="form-group">
        <div class="row">
          <label class="col-md-3">Course</label>
          <div class="col-md-3">
          
            <select class="form-control " name="course_id">
            <option value="">Choose Course</option>
            @foreach( $courses as $c)
                         <option value="{{$c->cid}}">{{$c->cname}}[{{$c->csection}}]</option>
             @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
    </div>

         <div class="form-group">
    </div>
    <div class="form-group">
    </div>
           <div class="form-group">
        <div class="row">
          <label class="col-md-3">Note</label>
          <div class="col-md-3"><input type="file" name="image" class="form-control"></div>
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