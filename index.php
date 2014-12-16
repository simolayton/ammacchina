<!DOCTYPE html>
<html>
    	<head>
        	<title>AMMacchina</title>
        	<link rel="shortcut icon" href="img/icona.ico">
        	<style>
        	
			.button
			{
			display: inline-block;
			padding: 1.3em 3em;
			background: #004a80;
			border-radius: 25px;
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
            		<img src="img/1500.png" width="600" height="250"/>
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
			<button class="button" type="submit" name="cmd"  value="Login">Login</button>
		
		</form>
	</div>
	
	<br>
	<br>
	<br>
	
	<div style="text-align: center">
		<a href="README.md"><i>#CREDENZIALI</a> : SitoProgettoAMM2014 - AMMacchina *Simone Mameli</i>
	</div>
	
	</body>
	
</html>
