<?php

// come sempre prima cosa, aprire la sessione 
session_start();
 // Include il file di connessione al database
include("db_con.php");
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
		
		<body>
		
		<br>
		
		<header>
        		<div style="text-align: center">
            			<h1><img src="../img/1500.png" width="600" height="250" />
        		</div>
	 	</header>
	 	
	 	<br>
		<br>
		<br>
		<div style="text-align: center">
			<font color="red"><h3> ATTENZIONE : Credenziali NON corrette </h3></font>
		</div>
		<br>
		<br>
		<br>
		<br>
		
		<form action="../index.php">
		
			<button class="button" type="submit" name="cmd"  value="tornaindietro">Torna indietro</button>
		
		</form>
		
		</body>
	</head>
	
	</html>
	
	<?php
}

?>
