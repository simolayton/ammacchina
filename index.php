<!DOCTYPE html>
<html>
    	<head>
        	<title>AMMacchina</title>
	</head>
	
	<br>
	<br>
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
	</body>
	
</html>
