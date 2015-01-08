<!DOCTYPE html>

<html>

        <head>
            	<script javascript>
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
                        <li class="current_page"><a href="#" id="parcoauto">Parco Auto</a></li>
                        <li><a href="azienda.php" id="azienda">Azienda</a></li>
                        <li><a href="contatti.php" id="contatti">Contatti</a></li>
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
            	$queryvis = mysql_query("SELECT * FROM cars WHERE stato='non venduta'") or die("query non riuscita".mysql_error());
            	$row = mysql_fetch_object($queryvis);
                ?>
                
                
                
                
         <!-- if(mysql_num_rows($queryvis)==0)
         {
         ?>
         <br><p>Nessun veicolo comprato al momento. Riprova tra poco</p><br><br>
         
         //}
         //while($row = mysql_fetch_object($queryvis))
         
         ?> -->
             <br>
	
             <table>
                 <tr>
                     <td>
                         <table id="table-vis">
                             <tr>
                                 <td><img src="../../Immagini/noimg.png" alt="No image aviable"></td>
                             </tr>
         		<tr>
                               <td>Prezzo: &nbsp;<?echo"$row->prezzo";?> &euro;</td>
                           </tr>
                       </table>
                   </td>

                   <td>
                   
                       <table id="table-vis">
                           <tr>
                               <td>Marca:</td><td><?echo"$row->marca";?></td>
                           </tr>
                           <tr>
                               <td>Modello:</td><td><?echo"$row->modello";?></td>
                           </tr>
                           <tr>
                               <td>Colore:</td><td><?echo"$row->colore";?></td>
                           </tr>
                                 <tr>
                                     <td>Anno:</td><td><?echo"$row->anno";?></td>
                                 </tr>
                                 <tr>
                                     <td>Alimentazione:</td><td><?echo"$row->alimentazione";?></td>
                                 </tr>
                                   <tr>
                                       <td>Chilometri:</td><td><?echo"$row->km";?></td>
                                   </tr>
                               </table>
                           </td>
                       </tr>
                   </table>
                
                
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
