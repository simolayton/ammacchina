<!DOCTYPE html>

<html>

        <head>
        
                <title>AMMacchina</title>
        	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        	<link rel="stylesheet" type="text/css" href="../../css/style.css">
        	<link rel="shortcut icon" href="../../img/icona.ico">
        </head>
        
	<body>
	
        <div id="page">
                
                <header>
                
                    <div style="text-align: center" id="header">
                        <img src="../../img/1500.png" alt="" width="600" height="250"/>
                    </div>
                    
                <div style="text-align: center" id="top">

		<div style="text-align: center" id="menu">
                    <ul>
                        <li><a href="home.php" id="home">Home</a></li>
                        <li><a href="parcoauto.php" id="parcoauto">Parco Auto</a></li>
                        <li class="current_page"><a href="#" id="carrello">Carrello</a></li>
                        <li><a href="ricerca.php" id="ricerca">Ricerca</a></li>
                        <li><a href="../../php/logout.php" id="logout">Logout</a></li>
                    </ul>
                </div>
		</div>
 
                </header>
                
                <div style="text-align: center">
                
                       <h3>Il tuo carrello:</h3>
                       
                </div>
                
                <?php
                $connessione_al_server = mysql_connect("localhost","mameliSimone","macaco861");
                
                if(!$connessione_al_server)
                {
                	die("Errore: connessione non riuscita".mysql_error());
            	}
            	$db_selected = mysql_select_db("amm14_mameliSimone", $connessione_al_server);
            	if(!$db_selected)
            	{
                	die("Errore: selezione del database errata ".mysql_error());
            	}
            	$query = mysql_query("SELECT * FROM cars,cart WHERE id=idauto") or die("query non riuscita".mysql_error());
            	$vis = mysql_fetch_object($query);
                ?>
                
                 <?php
            	while($vis = mysql_fetch_object($query))
            	{
            	?>
            
        	<br>

                   
                <div style="text-align: center">
                  
                   
                 	<img src="../../img/pauto.png" width="100" height="70" alt="">
                   
                        <?echo"$vis->marca";?>
                        
                        <?echo"$vis->modello";?>,
                        
                        <?echo"$vis->anno";?>,
                        
                        <?echo"$vis->stato";?>, 
                        
                        colore : <?echo"$vis->colore";?>,
                        
                        <?echo"$vis->alimentazione";?>, 

                        chilometri : <?echo"$vis->chilometri";?>,
                        
                        <b>PREZZO : </b><?echo"$vis->prezzo";?>
                        
                        <a href="parcoauto.php?rimuovi=<?echo $vis->id?>" id="button">Rimuovi dal carrello</a>

			<a href="carrello.php?conferma=<?echo $vis->id?>" onclick="window.open('https://www.paypal.com/it/webapps/mpp/home')" id="button" style="background-color:green">Conferma carrello</a>

                        </div> 

              		<?php
                        }
                        ?>
 
                   	<?php
                	if(isset($_GET["conferma"]))
                	{
				$idcarr = $_GET["conferma"];
                	    	$querydel = mysql_query("DELETE FROM cars WHERE id='$idcarr'") or die('Query non riuscita'.mysql_error());     
				$queryconf = mysql_query("DELETE FROM cart WHERE label!='NON_ELIMINARE'") or die('Query non riuscita'.mysql_error());      

				header("refresh:1;url=carrello.php");

                	}
                        ?>
			
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
                
        <div id="footer">
        
                <div style="text-align: center">
                        <b><i>Simone Mameli</i></b>
                </div>
                
                <br>
                <br>
                
                <div style="text-align: center">
                        <a id="htmlval" href="http://validator.w3.org/check?uri=referer" target="_blank">HTML Valid</a>

                        <a id="cssval" href="http://jigsaw.w3.org/css-validator/check/refer" target="_blank">CSS Valid</a>
                </div>
        </div>
        </div>

</body>

</html>
