<html>
<head>
    <link rel="icon" href="Luna.jpg" type="png" />
<img src="sfondi/lunatommy.jpg" id="sfondo" />
 <ul id="menu">
        
  <li ><a href="Inizio.php">Home</a></li>
  <li><a href="Presentazione%20Tommaso%20Arcuri%20Sito.pdf">Aiuto</a></li>
  <li><a href="#">Maturita'<span style="font-size:8px">&nabla;</span></a>
    <ul class="hidden">
      <li style="border-bottom:1px solid #CCC"><a href="appunti.php">Appunti</a></li>
      <li><a href="Relazione%20PCTO%20Tommaso%20Arcuri.pdf">PTCO</a></li>
    </ul>
  </li>
  <li><a href="doveTrovarci.php" style="border-right:0">Dove trovarci</a></li>
  
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

       li{background: darkblue}

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
<script type="text/javascript">

function Email() {
var email = document.modulo.email.value;
var oggetto = document.modulo.oggetto.value;
var messaggio = document.modulo.messaggio.value;
 if ((oggetto == "") || (oggetto == "undefined")) {
alert("Inserire un oggetto.");
document.modulo.oggetto.focus();
}
else if ((messaggio == "") || (messaggio == "undefined")) {
alert("Inserire un messaggio.");
document.modulo.messaggio.focus();
}
else {
location.href = "mailto:" + email + "?Subject=" + oggetto + "&Body=" + messaggio;
}
}
</script>
   
<center><img src="io.jpeg"></center>
    <h1 class="h1"><font class="c" face="italic,coursive" color="white"><center> <span STYLE="background:darkred;"> Ciao, mi chiamo Tommaso Arcuri <br> Sono nato a Catanzaro il 5 ottobre 2001, abito a Settingiano e da come si può vedere <br> la mia passione si basa principalmente su tre cose <br> L'informatica, Astronomia e la lettura <br> Spero con tutto il mio cuore che questo sito possa segnarvi in qualche modo e soddisfare <br> la vostra fame di conoscenza.  </span></center></font>