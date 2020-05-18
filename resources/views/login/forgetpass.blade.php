<!DOCTYPE html>
<html>
<head>
	<title>Forget Pass</title>
</head>
<body>
	<form method="POST">
		 <h3>Fill the form</h3>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div>User Id<input type="text" name="user_id">
		</div>
		<br>
		
		<div>email: <input type="text" name="email">
		</div>

	<div><input type="submit" name="submit"></div>
	</form>
</body>
</html>