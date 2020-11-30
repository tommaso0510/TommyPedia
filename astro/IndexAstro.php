<html>
<head>
    <link rel="icon" href="../Luna.jpg" type="png" />
    <script src="../js/modernizr.custom.js"></script>
    <ul id="menu">
  <li ><a href="../Inizio.php">Home</a></li>
  <li><a href="../credits.php">Ringraziamenti</a></li>
<li><a href="../Presentazione%20Tommaso%20Arcuri%20Sito.pdf">Aiuto</a></li>
  <li><a href="../contatti.php">Contatti</a></li>
  <li><a href="../doveTrovarci.php" style="border-right:0">Dove trovarci</a></li>
</ul>
       
        <link rel="stylesheet" href="style.css">
   <style type="text/css">
       /* Regole di reset */
ul{margin: 0;padding:0;list-style-type:none}

/*MENU PRINCIPALE*/
/* Lista in orizzontale. inline-block è come inline, ma può avere altezza e larghezza; relative occorre al sottomenu */
#menu li{display:inline-block;position:relative}

/* Menu. Cambiando center l'oriento a destra o sinistra */
#menu{width:100%;background-color:darkblue;border-radius:6px;
text-align:center}

       #menu li{background: darkblue}

/* Link menu. Cambiando 80px posso scrivere voci più lunghe */
li a{display:block;padding:12px 20px;width:80px;color:#fff; font:bold 12px Arial;
text-decoration:none;border-right:1px solid #ccc}

/* Link menu hover */
a:hover{color:rgb(255, 0, 0)} 


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

        <center> <img src="lunalogo.png" width="600" height="325"></center>
        <link rel="stylesheet" href="style.css">
    
  
       
       <h1 class="h1"><font class="c" face="italic,coursive" color="white"><center> <span STYLE="background:darkblue;">     Salve Utente, questa è la bellissima sezione di Astronomia, dove ti aspetta un universo di cose da conoscere. <br> Prego, vuoi entrare o registrarti?</span> </center></font></h1>
    
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
  background-color: darkblue; 
  color: black; 
  border: 2px solid black;
}

.button1:hover {
  background-color: black;
  color: white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2 {
  background-color: darkblue; 
  color: black; 
  border: 2px solid black;
}

.button2:hover {
  background-color: black;
  color: white;
}    
    
  
</style>
	
	 <body background="luna.jpg">
		
		<center><div id="registra" class="choose"><a href="Registrati.php"><button class="button button2"type="button">Registrati</button></a></div>
		<div id="login" class="choose"><a href="loginAstro.html"><button class="button button1" type="button">Login</button></a></div>
		</center>
<h1 class="h1"><font class="c" face="italic,coursive" color="white"><center> <span STYLE="background:#00005c;">     
                    Ecco per te le no<span STYLE="background:#00005c;">tizie del giorno: </span><br>
        </span> </center></font></h1>
<div class="container demo-3">
			<!-- Top Navigation -->
			<link rel="stylesheet" type="text/css" href="cssnotizie/default.css" />
		<link rel="stylesheet" type="text/css" href="cssnotizie/component.css" />
			
			<ul class="grid cs-style-6">
                <li class="li1" >
					<figure>
						<img src="../images/5G_Grafik.jpg" alt="img01">
						<figcaption>
							<h3>Discorsetto sul 5G.</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizieAstro/5e.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				<li class="li1" >
					<figure>
						<img src="../images/16787988882_56b85ac11e_k.jpg" alt="img01">
						<figcaption>
							<h3>SpaceX e NASA, lancio rimandato al
30 maggio</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizieAstro/space%20x.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
                <li class="li1" >
					<figure>
						<img src="../images/plutocaronte.jpeg" alt="img01">
						<figcaption>
							<h3>Plutone: svelato il mistero della sua
atmosfera blu</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizieAstro/Plutone.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				
                <li class="li1">
					<figure>
						<img src="../images/uni.jpg" alt="img03">
						<figcaption>
							<h3>Tutto l’Universo in un computer!</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizieAstro/universo.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
                
				<li class="li1">
					<figure>
						<img src="../images/nebulosa_450x400.jpg" alt="img02" width="400" height="370">
						<figcaption>
							<h3>Nebulose, le gemme dell’Universo
</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizieAstro/Nebulosa.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				 <li class="li1" >
					<figure>
						<img src="../images/5614d40cba60f648089ac9e8b7d23c05.jpg" alt="img01">
						<figcaption>
							<h3>Sistema solare: uno scontro galattico alla base della formazione</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizieAstro/galassie.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
				<li class="li1" >
					<figure>
						<img src="../images/moon.gif" alt="img01">
						<figcaption>
                            <br><br>
							<h3>Galileo e la luna, quel primo
incontro ravvicinato</h3>
							<span>Tommaso Arcuri</span>
							<a href="notizieAstro/Galileo.pdf">Naviga.</a>
						</figcaption>
					</figure>
				</li>
			</ul>
        </div>
		Sistema solare: uno scontro galattico alla base della formazione
	</body>
    
</html>