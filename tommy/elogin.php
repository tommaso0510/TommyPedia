<link rel="icon" href="../Luna.jpg" type="png" />
<?php
if (!(isset($_POST['ricerca']))){
?>
<body background="libro.gif">
    <style>.user_search form > input {
  WIDTH: 200px;
  FONT-STYLE:italic;
  PADDING: 2px 10px 5px 30px;
  BORDER: none;
  BORDER-RADIUS: 10px;
  BOX-SHADOW: 2px 2px 5px #CCC;
  width: 125;

  
}
        .ricerca{
            position: relative;
            bottom: 4;
        }
    </style>

 

<?php 
session_start();
    

//$host= $_POST['host'];
//$user= $_POST['user'];
//$psw1 = $_POST['PSW'];
$database = "tommypedia";
//$nome= $_POST['nome'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['email'] = $_POST['email'];
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['password'] = $_POST['password'];
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['nome'] = $_POST['nome'];
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['cognome'] = $_POST['cognome'];
    }
$email=  $_SESSION['email'] ; 
$psw=  $_SESSION['password'];
$nome=  $_SESSION['nome'] ; 
$cognome=  $_SESSION['cognome'];
        $conn= mysqli_connect("localhost","root","",$database) or die ('impossibile connettersi al server ' .mysqli_error());
            
        mysqli_select_db($conn,$database) or die ('impossibile connettersi al server ' .mysqli_error());
            
        $nome_tabella="users";
            
        $sql1 = "SELECT * FROM $nome_tabella WHERE email ='" .$email . "'";
        $sql2 = "SELECT * FROM $nome_tabella WHERE psw ='" .$psw . "'";
        
if($sql1 === FALSE) {
    die(mysqli_error());
}
if($sql2 === FALSE) {
    die(mysqli_error());
}

            $result1 = mysqli_query($conn,$sql1) or die( mysqli_error($conn));
            $result2 = mysqli_query($conn,$sql2) or die( mysqli_error($conn));
            
if($row1=mysqli_fetch_assoc($result1)){
                $autenticato1 =($email = $row1['email']);
            }
else 
                $autenticato1 = false;
if($row2=mysqli_fetch_assoc($result2)) {
   
                $autenticato2 =($psw =$row2['psw']);
            }
else 
    $autenticato2 = false;
           
        if(($autenticato1==true)&&($autenticato2==true))
        {
            ?>
            <ul id="menu">
        
  <li ><a href="../Inizio.php">Home</a></li>
     <li><a href="../Presentazione%20Tommaso%20Arcuri%20Sito.pdf">Aiuto</a></li>
  <li><a href="../credits.php">Ringraziamenti</a></li>
  <li><a href="#">Maturita'<span style="font-size:8px">&nabla;</span></a>
    <ul class="hidden">
      <li style="border-bottom:1px solid #CCC"><a href="../appunti.php">Appunti</a></li>
      <li><a href="Relazione%20PCTO%20Tommaso%20Arcuri.pdf">PCTO</a></li>
    </ul>
  </li>

  <li><a href="contatti.php">Contatti</a></li>
  <li><a href="doveTrovarci.php" style="border-right:0">Dove trovarci</a></li>
     
     <li><nav class="user_search">
         
<form name="searchForm" action="" method="post">
<input  class="ricerca" type="text" name="cosa"/>
<input class="ricerca" type="submit" name="ricerca" value="INIZIA LA RICERCA" style="WIDTH:170px;"/>
    
</form>
         
</nav></li>
   <li><a href="login.html">Torna nel login</a></li>
  <li><a href="IndexTP.php">Logout</a></li>
     <li class="tommypedia"><a href="../astro/eloginAstro.php">Astropedia</a></li>
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
#menu .tommypedia{
           background: darkblue;
       }
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

    
            <?php
            echo "<h1><b><font color='white'><span STYLE='background:darkred;'>  Ciao, Benvenuto ".$nome." ".$cognome."</span></font></b></h1>";
            ?>
  
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

  
      
 body{
    margin: 0;
    padding: 0;
    background: url(libro.gif);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 430px;
    background: rgba(14, 0, 119, 0.65);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}   
  
</style>
   
          <center> 
              <tr><td><h1><b> <font color="white"><span STYLE="background:darkred;"> Ciao, questa e' la tua enciclopedia personale :</span> </font> </b></h1></td></tr>
               <td> <h1><font color="white"> <span STYLE="background:darkred;">Quale sezione vuoi visionare?:</span></font></h1>  </td>
                <link rel="stylesheet" href="style.css">
            <form class="koi" method="post" action="pagina_inserimento.php">  
                
<?php
                
 $conn= mysqli_connect("localhost","root","",$database) or die ('impossibile connettersi al server ' .mysqli_error());
            
        mysqli_select_db($conn,$database) or die ('impossibile connettersi al server ' .mysqli_error());
            
        
            
        $sql3 = "SELECT Argomentitommy.id_argomento FROM Argomentitommy" ;   
            if($sql3 === FALSE)  
    die(mysqli_error());
           
            
            $result3 = mysqli_query($conn,$sql3) or die( mysqli_error($conn));
            while($row3=mysqli_fetch_array($result3))
            {    $argomento= $row3['id_argomento'];
                echo "<td> <h1><font color='white'> <span STYLE='background:darkred;'>" . $row3['id_argomento']." <input type='radio' name='scelta' value='$argomento' /></span></font></h1><td>";
           
            }
                
                
                
?>
                 
                 
                   <tr>  <td> <input type="submit" class="button button1" value="Scopri" name="Entra"></td></tr>
				
              <tr><td> <input type="reset" class="button button2" value="resetta">  </td></tr>
                   
				</form>    
             <iframe width="560" height="315" src="https://www.youtube.com/embed/DKmPs4STuyY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/tn074KPbNAI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/ekFGPdQQMlY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Nnh4zOc2J3A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/fNvuGSCykCY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/OIAeg_n0l8Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
              </center>
		</body>
       <?php
        }
        else
        {
            echo "
            <style>
             body{
    margin: 0;
    padding: 0;
    background: url(libro.gif);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 430px;
    background: rgba(14, 0, 119, 0.65);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}   
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

  
</style>
   
    
            
            
            <body background='Audina2.jpg'>
            <font color= 'white'><h1><center><font color='white'> <span STYLE='background:darkred';>Autentificazione fallita</h1 </center>
            
            <form action='login.html'>
     <center><input type='submit' class='button button1' value='Ritenta' name='Entra'></center>
     </form>";
            
        }
    } else
    {
       ?>
<body background="libro.gif">
    <style>.user_search form > input {
  WIDTH: 200px;
  FONT-STYLE:italic;
  PADDING: 2px 10px 5px 30px;
  BORDER: none;
  BORDER-RADIUS: 10px;
  BOX-SHADOW: 2px 2px 5px #CCC;
  width: 125;

  
}
        .ricerca{
            position: relative;
            bottom: 4;
        }
    </style>

 <ul id="menu">
        
  <li ><a href="../Inizio.php">Home</a></li>
  <li><a href="altro.php">Altro</a></li>
  <li><a href="#">Maturita'<span style="font-size:8px">&nabla;</span></a>
    <ul class="hidden">
      <li style="border-bottom:1px solid #CCC"><a href="../appunti.php">Appunti</a></li>
      <li><a href="../Relazione%20PCTO%20Tommaso%20Arcuri.pdf">PCTO</a></li>
    </ul>
  </li>
  <li><a href="../aiuto.php">Aiuto</a></li>
  <li><a href="contatti.php">Contatti</a></li>
  <li><a href="doveTrovarci.php" style="border-right:0">Dove trovarci</a></li>
     
     <li><nav class="user_search">
         
<form name="searchForm" action="" method="post">
<input  class="ricerca" type="text" name="cosa"/>
<input class="ricerca" type="submit" name="ricerca" value="INIZIA LA RICERCA" style="WIDTH:170px;"/>
    
</form>
</nav></li>
     
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

  
      
 body{
    margin: 0;
    padding: 0;
    background: url(libro.gif);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 430px;
    background: rgba(14, 0, 119, 0.65);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}   
  
</style>
<font color ="white" size="5px">
         <span STYLE="background:chocolate;">   
<?php
$cosa=  $_POST['cosa'];
          $vera=false; 
          
         
    $database = "tommypedia";
    

    $conn= mysqli_connect( "localhost","root" ,"",$database) or die ('impossibile connettersi al server ' .mysqli_error());
            
     mysqli_select_db($conn,$database) or die ('impossibile connettersi al server ' .mysqli_error());
    
        $sql2 = "SELECT contenuti.descrizione, contenuti.titolo 
        FROM contenuti INNER JOIN argomentitommy ON contenuti.id_argomento=argomentitommy.id_argomento
        WHERE contenuti.titolo='$cosa'";
        
       
        if($sql2 === FALSE)  
            die(mysqli_error());
    
    $result2 = mysqli_query($conn,$sql2) or die( mysqli_error($conn));
                         while($row2=mysqli_fetch_array($result2))
            {     $vera=true;    ?>
                    <style>
                    .box {
width: 99%;
height: auto;
border: 1px solid;
background-color:rgba(255, 0, 10, 0.49);
	
}
                    </style>
                <?php
                    echo "<font color='black'><div class='box'>$cosa : " . $row2['descrizione']."<br></div></font>";
					
            }

    if($vera == false)  
            echo "Mi dispiace ma non ho trovato nulla con la parola chiave: $cosa";
    ?>
     <form action="elogin.php">
     <center><input type="submit" class="button button1" value="Torna alla scelta dell'Argomento" name="Entra" style=' width: 99%;'></center>
     </form>
             <?php
    }
   
    ?>
     
     
                  
   