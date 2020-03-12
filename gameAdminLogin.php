<!DOCTYPE html>
<html>
<head>
	<style>
	body{
		background-color: lightblue;
	}
	h2{
		text-align: center;
		font-family: futura;
		font-size: 48px;
	}
	form{
		text-align: center;
		font-family: futura;
		font-size: 20px;
	}
	</style>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Include JS File Here -->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	</head>
<body>
	<form action="gameAdminCheckLogin.php" method="post" id="form_id">
		<h2>Math Game - Admin Login</h2>
		Userame:
		<input type="text" name="username" id="username" placeholder="Name" />
		<br/><br/>
		Password:
		<input type="password" name="password" id="password" placeholder="Password" /><br/><br/>
		<input type="submit" name="submit_id" id="login" value="Login" />
	</form>

</body>
</html>
