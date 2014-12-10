<?php

//connessione al nostro database
$connessione_al_server=mysql_connect("amm14_mameliSimone","mameliSimone","macaco861");
// ip locale, login e password
if(!$connessione_al_server)
{
	// questo apparirà solo se ci sarà un errore
	die ('Non riesco a connettermi: errore '.mysql_error());
}

$db_selected=mysql_select_db("users",$connessione_al_server);
// dove io ho scritto "prova" andrà inserito il nome del db
if(!$db_selected)
{
	// se la connessione non andrà a buon fine apparirà questo messaggio
	die ('Errore nella selezione del database: errore '.mysql_error()); 
}

?>