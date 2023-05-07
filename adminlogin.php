<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page </title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="alogin.php" method="POST">
<div class="box-form">	
	<div class="left">
		<div class="overlay">
		<h1 >Gujarat Anganwadi Portal</h1>
		<p class="tagline">पौषण और स्वास्थ्य शिक्षा हम प्रदान करें, समाज को

			जागरुक करने का हम कार्य करें</p>
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<h4>Admin</h4>
		<div class="inputs">
			<input type="text" placeholder="username" name="username">
			<br>
			<input type="password" placeholder="password" name="password">
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
			<!-- <p class="forgetpassword"><a href="#"> forget password?</a></p> -->
		</div>
			
			<br>
			<button type="submit" name="submit" value="Login">Login</button>
	</div>
	
</div>
</form>
</body>
</html>
