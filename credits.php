<html>
<head>
    <link rel="icon" href="Luna.jpg" type="png" />
    <ul id="menu">
  <li><a href="Inizio.php">Home</a></li>
        <li><a href="Presentazione%20Tommaso%20Arcuri%20Sito.pdf">Aiuto</a></li>
  <li><a href="contatti.php">Contatti</a></li>
  <li><a href="doveTrovarci.php" style="border-right:0">Mappa</a></li>
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

  

    
    
    <h1 class="h1"><font class="c" face="italic,coursive" color="white"><center> <span STYLE="background:darkred;">     Un ringraziamento speciale va in primis alle fonte di cui mi sono ispirato, partendo da <a href="https://www.passioneastronomia.it/">https://www.passioneastronomia.it/ </a> da cui ho preso le fonti<br> sullo spazio e sull'astronomia, un'altro ringraziamento va a <a href="https://maturansia.it/appunti/">https://maturansia.it</a>da cui mi sono ispirato per gli appunti sulla maturità ("State facendo un ottimo lavoro per noi maturandi!"). Ovviamente non puo' mancare il colosso dell'informazione, ho cercato di creare qualcosa di grande come la<br> vostra enciclopedia: <a href="https://it.wikipedia.org/wiki/Pagina_principale"> Wikipedia </a><br> Altro fonti: <a href="https://www.lettodanoi.it/">https://www.lettodanoi.it/</a> <br> <a href="https://www.ilfattoquotidiano.it/">https://www.ilfattoquotidiano.it/</a><a href="https://www.focus.it/"><br>https://www.focus.it/ </a><a href="https://lezioni.matematicamente.it/" ><br>https://lezioni.matematicamente.it/</a><br><a href="https://it.qwe.wiki/">https://it.qwe.wiki/ </a><br><a href="https://notiziein.it/">https://notiziein.it/</a> <br><a href="https://www.youtube.com/user/link4universe">https://www.youtube.com/user/link4universe </a> <br> <a href="https://www.youtube.com/channel/UCZTPemJj_RULY9L_rnpGgEQ">https://www.youtube.com/channel/UCZTPemJj_RULY9L_rnpGgEQ</a><a href="www.treccani.com"><br>Treccani Enciclopedia</a><br>Grazie ragazzi! </span></center></font></h1><br>
    
		<title>TommyPedia</title>
        </head>
    <body>
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
</style>
	
           <img src="sfondi/lunatommy.jpg" id="sfondo" />
    </body>
	
		
	
</html>	
