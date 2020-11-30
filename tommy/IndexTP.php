<html>
<head>
    <link rel="icon" href="../Luna.jpg" type="png" />
    <ul id="menu">
     
  <li ><a href="../Inizio.php">Home</a></li>
  <li><a href="../credits.php">Ringraziamenti</a></li>
  <li><a href="#">Maturita'<span style="font-size:8px">&nabla;</span></a>
    <ul class="hidden">
      <li style="border-bottom:1px solid #CCC"><a href="../appunti.php">Appunti</a></li>
       <li><a href="../Relazione%20PCTO%20Tommaso%20Arcuri.pdf">PCTO</a></li>
    </ul>
  </li>
<li><a href="../Presentazione%20Tommaso%20Arcuri%20Sito.pdf">Aiuto</a></li>
  <li><a href="../contatti.php">Contatti</a></li>
  <li><a href="../doveTrovarci.php" style="border-right:0">Dove trovarci</a></li>
</ul>
        <center> <img src="Logofinale.jpg" width="600" height="325"></center>
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

     

       <h1 class="h1"><font class="c" face="italic,coursive" color="white"><center> <span STYLE="background:darkred;">     Ciao utente, questa e' la TommyPedia, sezione Cultura Generale. <br> Prego, vuoi entrare o registrarti?</span> </center></font></h1>
    
		<title>Pagina Iniziale</title>
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
  border: 2px solid red;
}

.button1:hover {
  background-color: red;
  color: white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2 {
  background-color: darkred; 
  color: black; 
  border: 2px solid red;
}

.button2:hover {
  background-color: red;
  color: white;
}    
    
  
</style>
	
	 <body background="libreria.jpg">
		
		<center><div id="registra" class="choose"><a href="Registrati.php"><button class="button button2"type="button">Registrati</button></a></div>
		<div id="login" class="choose"><a href="login.html"><button class="button button1" type="button">Login</button></a></div>
		</center>
         
          <h1 class="h1"><font class="c" face="italic,coursive" color="white"><center> <span STYLE="background:darkred;">     
                    Ecco per te le notizie e curiosità del giorno: </span><br>
         </center></font></h1>
<link rel="stylesheet" type="text/css" href="cssnotizie/default.css" />
		<link rel="stylesheet" type="text/css" href="cssnotizie/component.css" />
			
			<ul class="grid cs-style-6">
                <li class="li1" >
					<figure>
						<img src="../images/Epidemie.jpg" alt="img01">
						<figcaption>
							<h3>Le grandi epidemie nella storia e nella letteratura</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizie/Le%20epidemie%20nella%20letteratura,%20Tommaso%20Arcuri.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				<li class="li1" >
					<figure>
						<img src="../images/grandi-donne.jpg" alt="img01">
						<figcaption>
                            <h3>GRANDI DONNE; STORIE DI CORAGGIO E DETERMINAZIONE</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizie/Grandi%20donne.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
                <li class="li1" >
					<figure>
						<img src="../images/primo%5B1%5D.jpg" alt="img01">
						<figcaption>
							<h3>“Primo Levi di fronte e di profilo”, un libro racconta vita e opere di uno dei più grandi letterati del Novecento</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizie/Primo%20Levi.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				
                <li class="li1">
					<figure>
						<img src="../images/Pen%C3%A9lope%20-%20mitologia.jpg" alt="img03">
						<figcaption>
							<h3>La storia di Penelope moglie di Ulisse</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizie/Penelope.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
                
				<li class="li1">
					<figure>
						<img src="../images/metaemeta.jpg" alt="img02">
						<figcaption>
							<h3>Svevo e la Psicanalisi, atteggiamento ambiguo nei confronti della <br> nuova disciplina scientifica.</h3>
				
							<a href="notizie/Svevo%20e%20la%20psicanalisi,%20Tommaso%20Arcuri.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				
				
			</ul>


        
		
		
	</body>
    
</html>