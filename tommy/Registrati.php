<html>
<head>
    <link rel="icon" href="../Luna.jpg" type="png" />
    <ul id="menu">
   <li ><a href="IndexTP.php">Indietro</a></li>      
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

</style>

<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="signup-style.css">
<body>
    <?php
		if (!(isset($_POST['invia_dati']))){
		?>
    <div class="loginbox">
    <img src="Logofinale.jpg" class="avatar">
        <h1>Entra all'interno della conoscenza.</h1>
       <form class="form" action="" method="post">
             <p>Nome</p>
            <input type="text" placeholder="Nome" name="nome">
            <p>Cognone</p>
             <input type="text"  placeholder="Cognome"  name="cognome">
           <p>Email</p>
             <input type="text" placeholder="email@dom.com" name="email">
            <p>Password</p>
             <input type="password"  placeholder="Password"  name="pass1">
            <input type="submit" name="invia_dati" class="button" value="Login">
        
                   
            <a href="login.html">Hai gia' un account?  </a>
        </form>
       
    </div>
    
<?php
		} else {
            
                
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['email'] = $_POST['email'];
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['password'] = $_POST['pass1'];
    }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['nome'] = $_POST['nome'];
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['cognome'] = $_POST['cognome'];
    }
$email=  $_SESSION['email'] ; 
$pass1=  $_SESSION['password'];
$nome=  $_SESSION['nome'] ; 
$cognome=  $_SESSION['cognome'];        
		   
            $conn= mysqli_connect("localhost","root","") or die(mysqli_error($conn));
			mysqli_select_db($conn,"tommypedia") or die(mysqli_error($conn));
            $sql1 = "SELECT * FROM users WHERE email ='" .$email . "'";
            if($sql1 === FALSE) {
    die(mysqli_error());
}
             $result1 = mysqli_query($conn,$sql1) or die( mysqli_error($conn));
            if($nome==""||$cognome == ""|| $email == ""|| $pass1 == "")
            {
                $verita=FALSE;
            }
            else
            {
                $verita=TRUE;
            }
            if($row1=mysqli_fetch_assoc($result1)){
                $autenticato1 =($email = $row1['email']);
            
		    if($nome == "" ||$cognome == "" ||  $email == "" || $pass1 == "") {  
                echo "<h1><font size='20%' color='chocolate'><p><span STYLE='background:darkred;'> Devi riempire tutti i campi <br>Torna indietro e riprova.</p></font></h1>";
                echo"<form action=''>";
                    echo"<input type='submit' name='invia_dati' value='Torna Indietro' class='button button1' />";
                    echo"</form>";}
			
		    if($autenticato1)
            {
            echo " <h1><font size='20%' color='chocolate'><p><span STYLE='background:darkred;'>Questa email esiste già";
                echo"<form action=''>";
                    echo"<input type='submit' name='invia_dati' value='Torna Indietro' class='button button1' />";
                    echo"</form>";
                }
                }
            elseif($verita==TRUE) {
			
			$query = mysqli_query($conn,"INSERT into users(nome,cognome,email,psw) VALUES('$nome','$cognome','$email','$pass1')");
			
			  echo" <h1><font size='20%' color='chocolate'><p><span STYLE='background:darkred;'> La registrazione dei dati dell'utente e' avvenuta con successo. <br /></p></font></h1><a/ href= 'login.html'> <h1><font size='20%' color='chocolate'><p><span STYLE='background:darkred;'>
Entra<br /></p></font></h1></a>";
            }else
            {
                  echo "<h1><font size='20%' color='chocolate'><p><span STYLE='background:darkred;'> Devi riempire tutti i campi <br>Torna indietro e riprova.</p></font></h1>";
                echo"<form action=''>";
                    echo"<input type='submit' name='invia_dati' value='Torna Indietro'  class='button button1'/>";
                    echo"</form>";}
            }
        
		?>
            
            
        
</body>
</head>
</html>
    
    


