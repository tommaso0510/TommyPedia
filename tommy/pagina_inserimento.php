<html>
    <link rel="icon" href="../Luna.jpg" type="png" />
  <ul id="menu">
        
  <li ><a href="../Inizio.php">Home</a></li>
  <li><a href="../credits.php">Ringraziamenti</a></li>
  <li><a href="#">Maturita'<span style="font-size:8px">&nabla;</span></a>
    <ul class="hidden">
      <li style="border-bottom:1px solid #CCC"><a href="../appunti.php">Appunti</a></li>
       <li><a href="Relazione%20PCTO%20Tommaso%20Arcuri.pdf">PCTO</a></li>
    </ul>
  </li>
<li><a href="../Presentazione%20Tommaso%20Arcuri%20Sito.pdf">Aiuto</a></li>
  <li><a href="../contatti.php">Contatti</a></li>
  <li><a href="../doveTrovarci.php" style="border-right:0">Dove trovarci</a></li>
</ul>
        
         <script src="../js/modernizr.custom.js"></script>
		<link rel="stylesheet" type="text/css" href="cssnuovo/component.css" />
    <script src="js/modernizr.custom.js"></script>
  
       
    
    
       
        <link rel="stylesheet" href="style.css">
   <style type="text/css">
       /* Regole di reset */
ul{margin: 0;padding:0;list-style-type:none}

/*MENU PRINCIPALE*/
/* Lista in orizzontale. inline-block è come inline, ma può avere altezza e larghezza; relative occorre al sottomenu */
#menu li{display:inline-block;position:relative}

/* Menu. Cambiando center l'oriento a destra o sinistra */
#menu{width:100%;background-color:darkred;border-radius:6px;
text-align:center}

       #menu li{background: darkred}

/* Link menu. Cambiando 80px posso scrivere voci più lunghe */
li a{display:block;padding:12px 20px;width:80px;color:#fff; font:bold 12px Arial;
text-decoration:none;border-right:1px solid #ccc}

/* Link menu hover */
a:hover{color:#C8C8C8}

/* SOTTOMENU PRINCIPALE*/
#menu li .hidden{display:block; position:absolute;top:100px; left:0;
background-color:darkred;visibility:hidden;margin-left:-5px;border-right:none}

/* Link sottomenu */
#menu li .hidden li a{width:80px;border-bottom:1px solid #ccc}

/* Animazione al passaggio sopra agli elementi del menu */
#menu li:hover .hidden{margin-top:-65px;visibility:visible}
       

       

/* TRIGRAMMA */
/* Stile e invisibilità */
.showMenu{ width:40px;border:1px solid black;margin:auto;
color:#000;text-align:center;font-size:30px;
margin-bottom:10px;display:none}

/* Invisibilità checkbox. Il checkbox va nascosto in ogni caso ed il menu comparirà quando esso verrà selezionato tramite click sull’etichetta */
input[type=checkbox]{display:none}

/* La tilde alt126 permette di selezionare tutti gli elementi B presenti in un insieme A;
qui sta a significare che mostra il menu quando la checkbox viene selezionata. */
input[type=checkbox]:checked ~ #menu{display:block}
body { height: 100%; width:100%; margin: 0; padding: 0;}
#sfondo {position:fixed; top:0; left:0; width:100%; height:100%; z-index:-1;}
</style>

	<head>
<link rel="stylesheet" href="style.css">
		<title>Inserimento</title>

	</head>
	<style>

   .button {
  background-color: chocolate;
  border: none;
border-radius: 24px;
  color: white;
  padding: 14px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 0px 1px;
  cursor: pointer;
 transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: darkred; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2 {
  background-color: darkred; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

  

table {
border-collapse:collapse
}
td, th {
border:1px solid #ddd;
padding:8px;
}
    </style>
		<body background="libreria.jpg">
        <font color ="white" size="23px">
         <span STYLE="background:darkred;">   
			<?php 
                session_start();
			 if (!(isset($_POST['inserisci']))){
                $database = "tommypedia";
                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['scelta'] = $_POST['scelta'];
           
    }
                $scelta= $_SESSION['scelta'];
             echo "<br>";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['scelta'] = $_POST['scelta'];
           
    }
                
    $conn= mysqli_connect(	"localhost","root" ,"",$database) or die ('impossibile connettersi al server ' .mysqli_error($conn));
    mysqli_select_db($conn,$database) or die ('impossibile connettersi al server ' .mysqli_error());

               
                
                     
                    echo "Hai scelto $scelta!!!";
				   $database = "tommypedia";
    
                 $conn= mysqli_connect("localhost","root" ,"",$database) or die ('impossibile connettersi al server ' .mysqli_error($conn));
            
                  mysqli_select_db($conn,$database) or die ('impossibile connettersi al server ' .mysqli_error());

                
                 
                    
                    
                  $sql2 = "SELECT titolo FROM contenuti where id_argomento = '$scelta'" ;
                  if($sql2 === FALSE)  
                  die(mysqli_error());

                  $result2 = mysqli_query($conn,$sql2) or die( mysqli_error($conn));
            
                    while($row2=mysqli_fetch_array($result2))
                    { 
                  echo "<table width='5%' border='1'  bgcolor='#ff6c00'>";
                    echo "<tr><td>" . $row2['titolo']."<br></tr></td>";
                        echo"</table>";
                        
                
                }
                    echo "Di questi argomenti quale vuoi vedere?";
                    echo "<form class= 'koi' name='scelta' action='visualizzazioneDati.php' method='POST'>";
                        echo "<input placeholder='Scegli l'argomento style='background-color: darkred; width: 20%;'  type='text' name='argomento'/>";
                       echo" <input type='submit' class='button button1' value='Visualizza' name='Entra a Hogwars' style=' width: 10%;'>";
                    echo "</form>";
                
               
         
            ?>
             
              <form class= 'koi' method="post" action="">  
            
                  <font  color ="white" size="23px">
         <span STYLE="background:darkred;">  
                 
            Vuoi aggiornare l'enciclopedia?</span></font>
				   <tr>    <td><div id="div2"><input name="Titolo" placeholder="Titolo" style="background-color: darkred; width: 10%;" type="text" /></div></td>
				   </tr>
                  
				  <tr>   
                      <td><div id="div2"><textarea name="Argomento" style="background-color: darkred; " rows="10" cols="70"   ></textarea></div></td>
				  </tr>

            

				  <tr>
				     <td colspan="2"><input type="submit" class="button button1" value="inserisci" name="inserisci"  style=" width: 20%;" /></td>
				  </tr>
                  
				</form>
            <form action="elogin.php">
     <input type="submit" class="button button1" value="Torna alla scelta dell'argomento" name="Entra">
     </form>
             <?php
               
            }else{
               
                echo "<br>";
                $database = "tommypedia";
             
                $scelta= $_SESSION['scelta'];
                
          echo" <img src='gif/$scelta.gif' id='sfondo' /> ";
               echo" <img src='gif/$scelta.jpg' id='sfondo' /> ";
            
    $conn= mysqli_connect(	"localhost","root" ,"",$database) or die ('impossibile connettersi al server ' .mysqli_error($conn));
    mysqli_select_db($conn,$database) or die ('impossibile connettersi al server ' .mysqli_error());

              
				   $database = "tommypedia";
      

                   
                
               
                $titolo=$_POST['Titolo'];
                    $argomento=$_POST['Argomento'];
                   $scelta= $_SESSION['scelta'];
    
                    $query_insert="INSERT INTO contenuti(titolo,descrizione, id_argomento) VALUES ('$titolo', '$argomento','$scelta')";

				    if($query_insert === FALSE) 
                    die(mysqli_error());

                    $result = mysqli_query($conn,$query_insert) or die( mysqli_error($conn));

				    if ( !$result)
					die ('Errore nell inserimento dei dati nella query $query_insert : ' . mysqli_error($conn));
                    
                    mysqli_close($conn);
                                
                    echo "<font color='chocolate'><p><span STYLE='background:darkred;'> L'aggiornamento e' avvenuto con successo! <br>Torna indietro per scegliere l'argomento.</p></font>";
		     echo "<form class= 'koi' action='' >";
                       
                       echo" <input type='submit' class='button button1' value='Scegli argomento per $scelta' name='Entra a Hogwars'>";
                    echo "</form>";
                
                echo "<form action='elogin.php'>";
            
                       echo" <input type='submit' class='button button1' value='Torna alla TommyHome' >";
                    echo "</form>";
            }
         
            ?>
            </span>
            </font>
		</body> 
</html>