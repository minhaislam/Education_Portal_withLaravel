@extends('layouts.teacher')
@section('content')
<section class="content">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark">
              
                <a href="{{route('teacher.notes.index')}}"><b>ViewAllNotes | </b></a>
                <a href="{{route('teacher.notices.index')}}">ViewAllNotices | </a>
                <a href="{{route('teacher.students.index')}}"><b>ViewAllStudents</b></a>
            </h5>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Dashbord</a></li>
              <li class="breadcrumb-item active">Courses</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>
</section>
<div class="container">
@foreach($courses as $c)

<div class="card" style="width: 30rem;">
  <div class="card-body">
    <div class="panel-body course-list-panel">
                   <h5>Course Id: {{$c->cid}}</h5><h6> {{$c->cname}}</h6>
                    <hr>
                    <div>
                        <label>Section Status : </label>
                        <label class="label label-info"> (Open) </label>
                        <label> Status :&nbsp; </label>

                        <label class="label label-success">Valid</label>&nbsp;
                    </div>
                    <div>
                        
                    </div>
                    <div>
                        <label>Time :{{$c->ctime}}</label>
                    </div>
                </div>
                 <hr>
                <div class="panel-footer text-center">
                    <i class="fa fa-calendar" aria-hidden="true">
                        <a href="{{route('teacher.notes.show',$c->cid)}}"><b>| ViewNotes | </b></a>
                    </i>
                    <i class="fa fa-calendar" aria-hidden="true">
                        <a href="{{route('teacher.notes.create')}}">UploadNote | </a>
                    </i>
                    
                    <i class="fa fa-bullhorn" aria-hidden="true">
                        <a href="{{route('teacher.notices.create')}}">UploadNotice|</a>
                    </i>
                     <i class="fa fa-calendar" aria-hidden="true">
                      <a href="{{route('teacher.notices.show',$c->cid)}}"><b>ViewNotices | </b></a>
                    </i>
                </div>
                <div class="panel-footer text-center">
                    <i class="fa fa-file" aria-hidden="true">
                        <a href="{{route('teacher.students.show',$c->cid)}}"><b>ViewStudents |</b></a>
                    </i>
                    <i>
                        <a href="{{route('teacher.students.show',$c->cid)}}"><b>Give Marks</b></a>
                    </i>
                </div>
  </div>
</div>

</section>
@endforeach
</div>
@endsection