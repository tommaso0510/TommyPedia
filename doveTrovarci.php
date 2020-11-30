<html>
<head>
    <link rel="icon" href="Luna.jpg" type="png" />
      <link rel="stylesheet" href="style.css">
    
    
    <style>
    .google-maps {
  position: relative;
  padding-bottom: 85%;
  height: 0;
  overflow: hidden;
}
.google-maps > iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100% !important;
  height: 60% !important;
}
    
    
    
    </style></head>

<body>
     <img src="sfondi/lunatommy.jpg" id="sfondo" />
    
 <ul id="menu">
        
  <li ><a href="Inizio.php">Home</a></li>
  <li><a href="#">Maturita'<span style="font-size:8px">&nabla;</span></a>
    <ul class="hidden">
      <li style="border-bottom:1px solid #CCC"><a href="appunti.php">Appunti</a></li>
       <li><a href="Relazione%20PCTO%20Tommaso%20Arcuri.pdf">PCTO</a></li>
    </ul>
  </li>
  <li><a href="Presentazione%20Tommaso%20Arcuri%20Sito.pdf">Aiuto</a></li>
  <li><a href="contatti.php">Contatti</a></li>
  
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
    <div class="google-maps">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12418.411209685692!2d16.50252817820532!3d38.91019747006353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133ff892bb911bb7%3A0x95223112609faf34!2s88040%20Settingiano%20CZ!5e0!3m2!1sit!2sit!4v1589797315496!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
    
    
    
    </body>


</html>