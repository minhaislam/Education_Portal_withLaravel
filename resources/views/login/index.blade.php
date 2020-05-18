@extends('layouts.login')
@section('error')
@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
@endsection 

@section('forgetpass')
<a href="/ForgetPass">Forget password!</a>
@endsection