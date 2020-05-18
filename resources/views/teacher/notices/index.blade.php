@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Notices</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('teacher.index')}}">Dashbord</a></li>
              <li class="breadcrumb-item active">Notices</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>


 <section class="content">
      <div class="container-fluid">
        <p>
          <a href="{{route('teacher.notices.create')}}" class="btn btn-primary" >Add notices</a>
           <a href="{{route('teacher.courses.index')}}" class="btn btn-primary" >Back</a>
        </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>
            ID
          </th>
          <th>
            Notice
          </th>
          <th>
            Action
          </th>
        </tr>
 @foreach($notices as $c)
   <tr>
    <td>{{$c->id}}</td>
    <td>{{$c->noticename}}</td>
    <td>
      
      <form action="{{route('teacher.notices.destroy',$c->id)}}" method="post">
        <a href="{{route('teacher.notices.edit',$c->id)}}" class="btn btn-danger">Edit</a>
        @method('DELETE')
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