<!DOCTYPE html>
<html>
<head>
	<title>Education  Portal:Login</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}" />
</head>
<body>
	<!--<center>
	<h1>Login Page</h1>
	<form method="post"> 
		Username: <input type="text" name="uname" > <br>
		Password: <input type="password" name="password" ><br>
		<input type="submit" name="submit" value="Submit" >
	</form>
	</center>-->
<title>Education  Portal</title>
	<center>
	<div class="loginbox">
        <h2 class="log">Education Portal</h2>
        <form method="post">
        	<input type="hidden" name="_token" value="{{csrf_token()}}">
        	<div class="inp">
        	
		<input type="text" name="user_id" placeholder="user id" >
	</div>
	<div class="inp">

		<input type="password" name="password" placeholder="Password" > 
	</div>
		<input type="submit" name="submit" value="Log In">

		

	</form>

	</div>
</center>

</body>
</html>