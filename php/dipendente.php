<!DOCTYPE html>

<html>

        <head>
        
            	<script language="javascript">
			if(history.length>0)history.forward()
		</script>
        
                <title>AMMacchina</title>
        	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        	<link rel="stylesheet" type="text/css" href="../css/style.css">
        	<link rel="shortcut icon" href="../img/icona.ico">
        </head>
        
	<body>
	
        <div id="page">
                    
                <header>
                
                <div style="text-align: center" id="header">
                	<img src="../img/1500.png" alt="" width="600" height="250"/>
                </div>
                    
                <div style="text-align: center" id="top">

			<div style="text-align: center" id="menu">
                    	<ul>
                        	<li class="current_page"><a href="#" id="home">Home</a></li>
                        	<li><a href="dipendente/parcoauto.php" id="parcoauto">Parco Auto</a></li>
                        	<li><a href="dipendente/aggiungiauto.php" id="aggiungiauto">Aggiungi Auto</a></li>
                        	<li><a href="dipendente/ricerca.php" id="ricerca">Ricerca</a></li>
                        	<li><a href="../php/logout.php" id="logout">Logout</a></li>
                    	</ul>
                	</div>
		</div>

                </header>
                
                <div style="text-align: center">
                
                       <h3>Home - promemoria:</h3>
                       
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
            	$queryvis = mysql_query("SELECT label FROM table") or die("query non riuscita".mysql_error());
            	$row = mysql_fetch_object($queryvis);
                ?>

        	<?php
        	while($row = mysql_fetch_object($queryvis))
            	{
            	?>

             	<br>

                <div style="text-align: center">
                   
                <?echo"$row->label";?>
                        
		</div> 
		
              	<?php
                }
		?>

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

</body>

</html>
