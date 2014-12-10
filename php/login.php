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

$query = mysql_query("SELECT * FROM users WHERE username='".$_POST["username"]."' AND password ='".$_POST["password"]."'") or DIE('query non riuscita'.mysql_error());

//if($_POST["username"] = "username" && $_POST["password"] = "password")
//{
//	header("location:php/prova.php"); 
//}
	
// Con il SELECT qua sopra selezione dalla tabella users l utente registrato (se lo è) con i parametri che mi ha passato il form di login, quindi
// Quelli dentro la variabile POST. username e password.

//se c'è una persona con quel nome nel db allora loggati
if(mysql_num_rows($query)&gt;0)
{   
	// metto i risultati dentro una variabile di nome $row
	$row = mysql_fetch_assoc($query); 
	// Nella variabile SESSION associo TRUE al valore logged
	$_SESSION["logged"] =true;  
	// e mando per esempio ad una pagina esempio.php// in questo caso rimanderò ad una pagina prova.php
	header("location:php/prova.php"); 
}
else
{
	// altrimenti esce scritta a video questa stringa di errore
	echo "non ti sei registrato con successo"; 
}

?>