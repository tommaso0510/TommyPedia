<html>
<head>
<link rel="icon" href="Luna.jpg" type="png" />
    
<link rel="stylesheet" type="text/css" href="cssnuovo/default.css" />
		<link rel="stylesheet" type="text/css" href="cssnuovo/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <ul id="menu">
        
  <li><a href="Presentazione%20Tommaso%20Arcuri%20Sito.pdf">Aiuto</a></li>
  <li><a href="#">Maturita'<span style="font-size:8px">&nabla;</span></a>
    <ul class="hidden">
      <li style="border-bottom:1px solid #CCC"><a href="appunti.php">Appunti</a></li>
      <li><a href="Relazione%20PCTO%20Tommaso%20Arcuri.pdf">PCTO</a></li>
    </ul>
  </li>
  <li><a href="credits.php">Ringraziamenti</a></li>
  <li><a href="contatti.php">Contatti</a></li>
  <li><a href="doveTrovarci.php" style="border-right:0">Dove trovarci</a></li>
    <li><a href="chisono.php" style="border-right:0">Chi sono</a></li>
</ul>
    
        <center> <img src="metaemeta.gif" width="600" height="325"></center>
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

       #menu li{background: darkblue}

/* Link menu. Cambiando 80px posso scrivere voci più lunghe */
li a{display:block;padding:12px 20px;width:80px;color:#fff; font:bold 12px Arial;
text-decoration:none;border-right:1px solid #ccc}

/* Link menu hover */
a:hover{color:#C8C8C8}

/* SOTTOMENU PRINCIPALE*/
#menu li .hidden{display:block; position:absolute;top:100px; left:0;
background-color:darkblue;visibility:hidden;margin-left:-5px;border-right:none}

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

  
       
    <h1 class="h1"><font class="c" face="italic,coursive" color="white"><center> <span STYLE="background:darkred;">     Se non puoi andare in bibliot<span STYLE="background:#00005c;">eca, sara' lei a venire da te!!!</span> <br>
        Benvenuto Utente, questa e' l'enciclopedia ufficiale<span STYLE="background:#00005c;"> per sostenere la cultura al tempo del coronavirus.</span> <br> Selezionare una <span STYLE="background:#00005c;">delle due sezioni:</span> </span> </center></font></h1>
    
		<title>TommyPedia</title>
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
    position: relative;
    right: 90px;
    
}

.button1:hover {
  background-color: red;
  color: white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2 {
  background-color: #01017c; 
  color: black; 
  border: 2px solid darkblue;
position: relative;
    left: 50px;
}

.button2:hover {
  background-color: black;
  color: white;
}    
    
.button3 {
  background-color: green; 
  color: black; 
  border: 2px solid darkgreen;
    position: absolute;
    top: 50px;
    
    
}

.button3:hover {
  background-color: darkgreen;
  color: white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button4 {
  background-color: #01017c; 
  color: black; 
  border: 2px solid darkblue;

}

.button4:hover {
  background-color: black;
  color: white;
}   

        .img1{
             position: relative;
             left: 70px;
        }
</style>
	
	 <body>
           <img src="sfondi/lunatommy.jpg" id="sfondo" />
		
		<center><a href="tommy/IndexTP.php"><button class="button button1" type="button">Cultura generale</button></a>
            <a href="astro/IndexAstro.php"><button class="button button2"type="button">Astronomia</button></a></center>
            
           <h1 class="h1"><font class="c" face="italic,coursive" color="white"><center> <span STYLE="background:darkred;">     
                    Ecco per te le no<span STYLE="background:#00005c;">tizie del giorno: </span><br>
        </span> </center></font></h1>
<div class="container demo-3">
			<!-- Top Navigation -->
			
			
			<ul class="grid cs-style-6">
                <li class="li1">
					<figure>
						<img src="images/s-l400.jpg" alt="img04">
						<figcaption>
							<h3>Nuovo sito in uscita!</h3>
							<span>Tommaso Arcuri</span>
							<a href="http://localhost/ProgettoCompleto/login.html">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				<li class="li1" >
					<figure>
						<img src="images/scontro.png" alt="img01">
						<figcaption>
							<h3>Scontri stellari, ecco lo spettacolare
risultato
</h3>
							<span>Tommaso Arcuri</span>
							<a href="astro/notizieAstro/1.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				
				<li class="li1">
					<figure>
						<img src="images/Giovanni-Pascoli.jpg" alt="img05">
						<figcaption>
							<h3>Giovanni pascoli e l'impresa libica.</h3>
							<span>Tommaso Arcuri</span>
							<a href="link/Italiano%20e%20Storia%20Tommaso%20Arcuri%20Percorso..pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
                <li class="li1">
					<figure>
						<img src="images/nato.png" alt="img03">
						<figcaption>
							<h3>Telescopio ESO, notizia clamorosa:
fotografata la nascita di un pianeta</h3>
							<span>Tommaso Arcuri</span>
							<a href="astro/notizieAstro/2.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
                <li class="li1">
					<figure>
						<img src="images/metaemeta.jpg" alt="img06">
						<figcaption class="figcaption2">
							<h3>Svevo e la Psicanalisi, atteggiamento ambiguo nei confronti della <br> nuova disciplina scientifica.</h3>
							
							<a href="link/Psicanalisi%20e%20Svevo%20(3).pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				<li class="li1">
					<figure>
						<img src="images/macchia.png" alt="img02">
						<figcaption>
							<h3>Scoperte 
stelle calde tormentate da macchie
magnetiche giganti</h3>
							<span>Tommaso Arcuri</span>
							<a href="astro/notizieAstro/3.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				
				
			</ul>
        </div>
		

	</body>
    
</html>