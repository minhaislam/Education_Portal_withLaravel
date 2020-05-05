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
<link rel="stylesheet" type="text/css" href="../CSS/Css/studenttable.css">
<script type="text/javascript" src="../CSS/admin.js"></script>
	<title>View Page</title>
@endsection


@section("table")

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Search <b>result</b></h2></div>
                  
                    
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    	 <th>ID</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        
                        <th>Password</th>
                         <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($searchresult as $result)
			@if(count($result)>0)
                	
		<tr>
            <td>{{ $result->id }}</td>
			<td>{{ $result->Full_Name }}</td>
			<td>{{ $result->user_id }}</td>
			<td>{{ $result->password }}</td>
			<td>{{ $result->type }}</td>
			<td>
				
                            <a href="{{route('admin.edit1', $result->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="{{route('admin.delete1', $result->id)}}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                             <a href="{{route('admin.profile', $result->id)}}" class="profile" title="profile" data-toggle="tooltip"><i class="material-icons">&#xE815;</i></a>
			</td>
		</tr>
		@endif
		@endforeach
                   
                </tbody>
            </table>
        </div>
    </div>


@endsection