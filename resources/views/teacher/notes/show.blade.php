
@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Notes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('teacher.index')}}">Dashbord</a></li>
               <li class="breadcrumb-item active"><a href="{{route('teacher.courses.index')}}"> Course</a></li>
              <li class="breadcrumb-item active">Notes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>


 <section class="content">
      <div class="container-fluid">
        <p>
          <a href="{{route('teacher.notes.create')}}" class="btn btn-primary" >Add notes</a>
           <a href="{{route('teacher.courses.index')}}" class="btn btn-primary" >Back</a>
        </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>
            ID
          </th>
          <th>
            ntitle
          </th>
          <th>
            Notes
          </th>
          <th>
            Action
          </th>
        </tr>
 @foreach($notes as $c)
   <tr>
    <td>{{$c->id}}</td>
    <td>{{$c->ntitle}}</td>
    <td>{{$c->nname}}</td>
    <td>
      <form action="{{route('teacher.notes.destroy',$c->id)}}" method="post">
       
      <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="submit" value="Delete" name="" class="btn btn-danger" >
      </form>
      </td>
   </tr>
    @endforeach
      </table
     </div>
</section>
@endsection