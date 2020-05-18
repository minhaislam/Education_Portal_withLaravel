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
      		<a href="" class="btn btn-primary" >ALL Students</a>
           <a href="{{route('teacher.courses.index')}}" class="btn btn-primary" >back</a>
      	</p>
      <table id="dataTable" class="table table-bordered table-striped">
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
            Department
          </th>
          <th>
           Cgpa
          </th>
          <th>
         Course id
          </th>
          <th>
       Creditcomplete
          </th>
          <th>
         Email
          </th>
          <th>
       Result
          </th>
          <th>
      Grade
          </th>
      	</tr>
   @foreach($students as $c)

   <tr>
   	<td>{{$c->id}}</td>
   	<td>{{$c->sid}}</td>
   	<td>{{$c->sname}}</td>
      <td>{{$c->sdepartment}}</td>
        <td>{{$c->scgpa}}</td>
          <td>{{$c->cid}}</td>
          <td>{{$c->credetcomplete}}</td>
          <td>{{$c->semail}}</td>
          <td>{{$c->marks}}</td>

@if($c->marks <= '100' && $c->marks >='90' )
         
         <td>A+</td>
         
         @elseif($c->marks <= '90' && $c->marks >='80' )
           <td>A</td>
         
         @elseif($c->marks <= '80' && $c->marks >='70' )
           <td>B</td>
           @elseif($c->marks <= '70' && $c->marks >='60' )
           <td>C</td>
           @elseif($c->marks <= '60' && $c->marks >='50' )
           <td>D</td>
          @else
           <td>F</td>
           @endif


   </tr>


   @endforeach
      </table>
     {{$students->links()}}
     </div>
</section>
@endsection