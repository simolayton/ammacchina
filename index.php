<!DOCTYPE html>
<html>
    	<head>
        	<title>AMMacchina</title>
        	
        	<style>
        	
			.button
			{
			display: inline-block;
			padding: 1.3em 3em;
			background: #004a80;
			border-radius: 25px;
			-moz-transition: opacity 0.25s ease-in-out;
			-webkit-transition: opacity 0.25s ease-in-out;
			-o-transition: opacity 0.25s ease-in-out;
			-ms-transition: opacity 0.25s ease-in-out;
			transition: opacity 0.25s ease-in-out;

			text-decoration: none;
			font-weight: 200;
			color: #FFF;
			border: 0px solid white;
			margin: auto;
			margin-top: 20px;
			display: block;
			}
			
		</style>
	</head>
	
	<br>
	
    	<body>
	
	<header>
        	<div style="text-align: center">
            		<h1><img src="1500.png" width="600" height="250" />
        	</div>
	 </header>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div style="text-align: center">
	
		<form method="post" action="php/login.php">
		
			<input type="hidden" name="cmd" value="login"/>
			<label for="user">Username</label>
			<input type="text" name="username" id="username"/>
			<br>
			<br>
			<label for="password">Password </label>
			<input type="password" name="password" id="password"/> 
			<br>
			<br>
			<input type="submit" value="Login"/>
		
		</form>
	</div>
	
	<br>
	<br>
	<br>
	
	<div style="text-align: center">
		<button class="button" type="submit" name="cmd"  value="Login">Login</button>
	</div>
	
	</body>
	
</html>
