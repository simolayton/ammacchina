<!DOCTYPE html>

<html>

        <head>
            	<script language="javascript">
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
                        <li class="current_page"><a href="#" id="home">Home</a></li>
                        <li><a href="parcoauto.php" id="parcoauto">Parco Auto</a></li>
                        <li><a href="carrello.php" id="carrello">Carrello</a></li>
                        <li><a href="ricerca.php" id="ricerca">Ricerca</a></li>
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
                            ?>
                                <h3>Risultati:</h3>
                            <?

                                $_SESSION["marca"] = $_POST["marca"];
                                $_SESSION["modello"] = $_POST["modello"];
                                $_SESSION["anno"] = $_POST["anno"];
                                $_SESSION["alimentazione"] = $_POST["alimentazione"];
                                $_SESSION["prezzo"] = $_POST["prezzo"];
                                $_SESSION["chilometri"] = $_POST["chilometri"];

                                $wadd = "WHERE compratore IS NULL";

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

                                $queryvis = mysql_query("SELECT * FROM auto $wadd") or die("query non riuscita".mysql_error());

                                if(mysql_num_rows($queryvis)==0)
                                {
                                ?>
                                    <br><br><p>Nessun risultato. Clicca <a href="javascript:history.back()">QUI</a> per tornare alla ricerca</p>
                                <?
                                }
                                
		

                                

                <div style="text-align: center">
                
                            <h3>Dove ci trovi:</h3>

                            <p>Via Ospedale 72, Cagliari</p>
				
			    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d642.6530510159041!2d9.114043400000018!3d39.22241150036271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e7340581eb77df%3A0x4ae977f197f31069!2sVia+Ospedale%2C+72%2C+09124+Cagliari!5e1!3m2!1sit!2sit!4v1419077660963" height="400" width="800"></iframe>	
                            
                            <h3>Contattaci:</h3>

                            <p>Tel: <a href="callto:info@ammacchina.com">078112345</a> - E-mail: <a href="mailto:smameli13@gmail.com">info@ammacchina.com</a></p>
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
