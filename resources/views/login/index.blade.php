@extends('layouts.login')
@section('error')
@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
@endsection