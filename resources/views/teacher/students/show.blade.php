@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Dashbord</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>


 <section class="content">
      <div class="container-fluid">
      	<p>
      		<a href="{{route('teacher.notices.index')}}" class="btn btn-primary" >ALL Students</a>
           <a href="{{route('teacher.notices.index')}}" class="btn btn-primary" >back</a>
      	</p>
      <table  id="dataTable" class="table  table-bordered table-striped">
      	<tr>
      		<th>
      			ID
      		</th>
      		<th>
      			 Student Id
      		</th>
      		<th>
      		  Student Name
      		</th>
          <th>
           Email
          </th>
          <th>
        Marks
          </th>
          <th>
       Last Message
          </th>
          <th>
         Action
          </th>
          <th>
         Sent message
          </th>
      	</tr>
   @foreach($students as $c)

   <tr>
    <td>{{$c->id}}</td>
    <td>{{$c->sid}}</td>
    <td>{{$c->sname}}</td>
          <td>{{$c->semail}}</td>
          <td>{{$c->marks}}</td>
          <td>{{$c->grade}}</td>
          <td>
          <a href="{{route('teacher.students.edit',$c->id)}}" class="btn btn-primary" >Give Mark</a>
         </td>
         <td>
          <a href="{{route('teacher.notes.edit',$c->id)}}" class="btn btn-primary" >Give Msessage</a>
         </td>
   </tr>
   @endforeach
      </table>
     </div>
</section>
@endsection