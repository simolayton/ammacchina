<?php

// come sempre prima cosa, aprire la sessione 
session_start();
 // Include il file di connessione al database
//include("db_con.php");

//connessione al nostro database
$connessione_al_server=mysql_connect("localhost","mameliSimone","macaco861");
// ip locale, login e password
if(!$connessione_al_server)
{
	// questo apparirà solo se ci sarà un errore
	die ('Non riesco a connettermi: errore '.mysql_error());
}
$db_selected=mysql_select_db("amm14_mameliSimone",$connessione_al_server);
// dove io ho scritto "prova" andrà inserito il nome del db
if(!$db_selected)
{
	// se la connessione non andrà a buon fine apparirà questo messaggio
	die ('Errore nella selezione del database: errore '.mysql_error()); 
}

// con questo associo il parametro username che mi è stato passato dal form alla variabile SESSION username
$_SESSION["username"]=$_POST["username"]; 
// con questo associo il parametro username che mi è stato passato dal form alla variabile SESSION password
$_SESSION["password"]=$_POST["password"]; 
//per selezionare nel db l'utente e pw che abbiamo appena scritto nel log

$querydip = mysql_query("SELECT * FROM users WHERE username='".$_POST["username"]."' AND password ='".$_POST["password"]."' AND ruolo='dipendente'") or DIE('query non riuscita'.mysql_error());

$querycli = mysql_query("SELECT * FROM users WHERE username='".$_POST["username"]."' AND password ='".$_POST["password"]."' AND ruolo='cliente'") or DIE('query non riuscita'.mysql_error());

//if($_POST["username"] = "username" && $_POST["password"] = "password")
//{
//	header("location:php/prova.php"); 
//}
	
// Con il SELECT qua sopra selezione dalla tabella users l utente registrato (se lo è) con i parametri che mi ha passato il form di login, quindi
// Quelli dentro la variabile POST. username e password.

//se c'è una persona con quel nome nel db allora loggati
if(mysql_num_rows($querydip))//&gt;0)
{   
	// metto i risultati dentro una variabile di nome $row
	$row = mysql_fetch_assoc($querydip); 
	// Nella variabile SESSION associo TRUE al valore logged
	$_SESSION["logged"] =true;  
	// e mando per esempio ad una pagina esempio.php// in questo caso rimanderò ad una pagina prova.php
	header("location:dipendente.php"); 
}
else if(mysql_num_rows($querycli))//&gt;0)
{   
	// metto i risultati dentro una variabile di nome $row
	$row = mysql_fetch_assoc($querycli); 
	// Nella variabile SESSION associo TRUE al valore logged
	$_SESSION["logged"] =true;  
	// e mando per esempio ad una pagina esempio.php// in questo caso rimanderò ad una pagina prova.php
	header("location:cliente.php"); 
}
else
{
	
	?>
	
	<!DOCTYPE html>
	<html>
    	<head>
        	<title>AMMacchina</title>
        	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        	<link rel="stylesheet" type="text/css" href="../css/style.css">
        	<link rel="shortcut icon" href="../img/icona.ico">
	</head>
	
	<br>
	
    	<body>
	
	<header>
        	<div style="text-align: center">
            		<img src="../img/1500.png" width="600" height="250"/>
        	</div>
	 </header>
	
	<br>
	<br>
	<div style="text-align: center">
		<h4><font color="#FF0000">L'username o la password sono errati.</font></h4>
	</div>
	<br>
	<br>
	
	<div style="text-align: center">
	
		<form method="post" action="../php/login.php">
		
			<input type="hidden" name="cmd" value="login"/>
			<label for="user">Username</label>
			<input type="text" name="username" id="username"/>
			<br>
			<br>
			<label for="password">Password </label>
			<input type="password" name="password" id="password"/> 
			<br>
			<br>
			<button id="button" type="submit" name="cmd"  value="Login">Login</button>
		
		</form>
	</div>
	
	<br>
	
	<div style="text-align: center">
		<a href="../README.md">Accesso al progetto.</a>
	</div>
	
	</body>
	
	</html>
	
	<?php
} 

?>
