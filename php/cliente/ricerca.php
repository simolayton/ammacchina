<!DOCTYPE html>

<html>

        <head>
            	<script language="JavaScript">
			if(history.length>0)history.forward()
		</script>
        
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
                    	<!-- <button id="button" type="submit" name="cmd"  value="home">Home</button> -->
		    

		<div style="text-align: center" id="menu">
                    <ul>
                        <li><a href="home.php" id="home">Home</a></li>
                        <li><a href="parcoauto.php" id="parcoauto">Parco Auto</a></li>
                        <li><a href="carrello.php" id="carrello">Carrello</a></li>
                        <li class="current_page"><a href="#" id="ricerca">Ricerca</a></li>
                        <li><a href="../../php/logout.php" id="logout">Logout</a></li>
                    </ul>
                </div>
		</div>
		    
		    
		    
                </header>
                
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
            	$queryvis = mysql_query("SELECT * FROM cars WHERE stato='Auto usata'") or die("query non riuscita".mysql_error());
            	$row = mysql_fetch_object($queryvis);
                if(isset($_GET["ricercaauto"]))
		{
                                $_SESSION["marca"] = $_POST["marca"];
                                $_SESSION["modello"] = $_POST["modello"];
                                $_SESSION["anno"] = $_POST["anno"];
                                $_SESSION["alimentazione"] = $_POST["alimentazione"];
                                $_SESSION["prezzo"] = $_POST["prezzo"];
                                $_SESSION["chilometri"] = $_POST["chilometri"];
                                $wadd = "WHERE stato ='Auto usata'";
                                if($_SESSION["marca"] !="")
                                    $wadd .= " AND marca ='".$_SESSION["marca"]."'";
                                if($_SESSION["modello"] !="")
                                    $wadd .= " AND modello ='".$_SESSION["modello"]."'";
                                if($_SESSION["anno"] !="")
                                    $wadd .= " AND anno >='".$_SESSION["anno"]."'";
                                if($_SESSION["alimentazione"] !="")
                                    $wadd .= " AND alimentazione ='".$_SESSION["alimentazione"]."'";
                                if($_SESSION["prezzo"] !="")
                                    $wadd .= " AND prezzo <='".$_SESSION["prezzo"]."'";
                                if($_SESSION["chilometri"] !="")
                                    $wadd .= " AND chilometri <='".$_SESSION["chilometri"]."'";
                                $queryvis = mysql_query("SELECT * FROM cars $wadd") or die("query non riuscita".mysql_error());
                                if(mysql_num_rows($queryvis)==0)
                                {
                                ?>
                                	<div style="text-align: center">
                                	
                                		<h3>NESSUN RISULTATO.</h3>
                                	
                                	</div>

                                <?
                                }
                                else if(mysql_num_rows($queryvis)!=0)
                                {
                                	?>
                                	<div style="text-align: center">
                                	
                                		<h3>AUTO TROVATA! CLICCA SU <a href="parcoauto.php">PARCO AUTO</a></h3>
                                	
                                	</div>
                                	<?
	
                                }
                                }
                                
                                ?>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                            
		<div style="text-align: center">
		
		<h3>Ricerca la tua auto:</h3>
		
		<form action="ricerca.php?ricercaauto" method="post" id="form-login">
                
                <br>Marca: <input type="text" name="marca" placeholder="Tutto"/><br>
 
                <br>Modello:<input type="text" name="modello" placeholder="Tutto"/><br>

                <br>Anno:<input type="number" name="anno" min="1930" max="2015" placeholder="Da"/></td><br>

                <br>Alimentazione:
                                            <input type="radio" name="alimentazione" value="Benzina" checked/>Benzina
                                            <input type="radio" name="alimentazione" value="Diesel"/>Diesel
                                            <input type="radio" name="alimentazione" value="Gas"/>Gas

                <br><br>Prezzo:<input type="number" name="prezzo" min="0" placeholder="Fino a"/><br>

                <br>Chilometri:<input type="number" name="chilometri" min="0" placeholder="Fino a"/><br>

                <br><input type="submit" value="Cerca" id="tasto-login"/><br>

                </form>

		</div>


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
