<!DOCTYPE html>
<html>
<head>
	<title>Forget Pass</title>
</head>
<body>
	<form method="POST">
		 <h3>Fill the form</h3>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		User ID:<input type="text" name="user_id"><br>
		Email:<input type="text" name="email"><br>
		<input type="submit" name="submit">


	</form>
</body>
</html>