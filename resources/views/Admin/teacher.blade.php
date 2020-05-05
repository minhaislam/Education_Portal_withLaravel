@extends('layouts.nav')

@section('csslinks')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="../CSS/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../CSS/Bootstrap/css/bootstrap.min.css">
@endsection
@section('jsscripts')
<script src="../CSS/jquery.min.js"></script>
<script src="../CSS/Bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/Css/studenttable.cteacherss">
<script type="text/javascript" src="../CSS/admin.js"></script>
	<title>View Page</title>
@endsection


@section("table")

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Teacher <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <button onclick="window.location.href = '{{route('admin.addnew2')}}';" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                    
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    	 <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Teacher ID</th>
                        
                        <th>Password</th>
                         <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($teachers as $teacher)
			@if($teacher->type == 'teacher')
                	
		<tr>
            <td>{{ $teacher->id }}</td>
			<td>{{ $teacher->Full_Name }}</td>
			<td>{{ $teacher->user_id }}</td>
			<td>{{ $teacher->password }}</td>
			<td>{{ $teacher->type }}</td>
			<td>
				
                            <a href="{{route('admin.edit2', $teacher->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="{{route('admin.delete2', $teacher->id)}}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                             <a href="{{route('admin.profile', $teacher->id)}}" class="profile" title="profile" data-toggle="tooltip"><i class="material-icons">&#xE815;</i></a>
			</td>
		</tr>
		@endif
		@endforeach
                   
                </tbody>
            </table>
        </div>
    </div>


@endsection