<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/642e84e1b5.js" crossorigin="anonymous"></script>
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
	div{
		padding-top: 150px;
		padding-right: 0px;
		padding-left: 0px;
		padding-bottom: 0px;
	}
	</style>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Include JS File Here -->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
</head>
<body>
	<form action="login/gameStudentCheckLogin.php" method="post" id="form_id">
		<h2>Welcome to the Math Game</h2>
		<p>Student Login</p>
		Userame:
		<input type="text" name="username" id="username" placeholder="Name" />
		<br/><br/>
		Password:
		<input type="password" name="password" id="password" placeholder="Password" /><br/><br/>
		<input type="submit" name="submit_id" id="login" value="Login" />
	</form>
	<i class="fas fa-plus" style="align: right; font-size: 32px;"></i>
	<i class="fas fa-divide" style="font-size: 32px; padding-left: 100px"></i>


	<form action="login/gameAdminLogin.php" method="post" id="form_id">
		<div>Other Login</div>
		<p></p>
		<input type="submit" name="submit_id" id="login" value="Admin Login" />
	</form>
	<form action="login/gameTeacherLogin.php" method="post" id="form_id">
		<input type="submit" name="submit_id" id="login" value="Teacher Login" />
	</form>
	<i class="fas fa-not-equal" style="font-size: 32px; padding-left: 100px;"></i>

</body>
</html>
