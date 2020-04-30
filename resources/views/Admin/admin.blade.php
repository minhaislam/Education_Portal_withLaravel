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
                    <div class="col-sm-8"><h2>Admin <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <button onclick="window.location.href = '';" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                    
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    	 <th>ID</th>
                        <th>Admin Name</th>
                        <th>Admin ID</th>
                        
                        <th>Password</th>
                         <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($admins as $admin)
			@if($admin->type == 'admin')
                	
		<tr>
            <td>{{ $admin->id }}</td>
			<td>{{ $admin->Full_Name }}</td>
			<td>{{ $admin->user_id }}</td>
			<td>{{ $admin->password }}</td>
			<td>{{ $admin->type }}</td>
			<td>
				<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a href="" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                             <a href="" class="profile" title="profile" data-toggle="tooltip"><i class="material-icons">&#xE815;</i></a>
			</td>
		</tr>
		@endif
		@endforeach
                   
                </tbody>
            </table>
        </div>
    </div>


@endsection