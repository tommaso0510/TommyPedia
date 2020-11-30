<html>
<head>
    <link rel="icon" href="../Luna.jpg" type="png" />
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="signup-style.css">
<body>
    
    <link rel="stylesheet" href="styles.css">

   
    <div class="planetPosition">
        <div class="far-orbit"></div>
        <div class="near-orbit"></div>
        <div class="mainPlanet">
            <div class="smallPlanet mars">
                <img src="https://image.flaticon.com/icons/svg/616/616463.svg">
            </div>
            
           
        </div>
        
    </div>
   <?php
		if (!(isset($_POST['invia_dati']))){
		?>
    <div class="loginbox">
    <img src="lunalogo.png" class="avatar">
        
      <h1>Entra nel mondo della conoscenza.</h1>
       <form class="form" action="" method="post">
            <p>Nome</p>
            <input type="text" placeholder="Nome" name="nome">
            <p>Cognone</p>
             <input type="text"  placeholder="Cognome"  name="cognome">
           <p>Email</p>
             <input type="text" placeholder="email@dom.com" name="email">
            <p>Password</p>
             <input type="password"  placeholder="Password"  name="pass1">
           
            <input type="submit" name="invia_dati" class="button" value="Registrati">
        
                   
            <a href="loginAstro.html">Hai gia' un account?  </a><br>
            <a href="IndexAstro.php">Indietro  </a>
        </form>
       
    </div>
    
<?php
		} else {
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
  background-color: darkblue; 
  color: white; 
  border: 2px solid black;
}

.button1:hover {
  background-color: black;
  color: white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2 {
  background-color: darkblue; 
  color: white; 
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
    <?php
    
    
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
            
            $conn= mysqli_connect("localhost","root","","tommypedia") or die(mysqli_error($conn));
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
                if($autenticato1 =($email = $row1['email']))
                { 
                    
                 if($nome == "" ||$cognome == "" ||   $email == "" || $pass1 == "") {  
                
                echo "<h1><font size='20%' color='chocolate'><p><span STYLE='background:darkblue;'> Devi riempire tutti i campi <br>Torna indietro e riprova.</p></font></h1>";
                echo"<form action='Registrati.php'>";
                    echo"<input class='button button1' type='submit' name='invia_dati' value='Torna Indietro' />";
                    echo"</form>";}
                    
                    
                    echo "<h1><font size='20%' color='chocolate'><p><span STYLE='background:darkblue;'> L'email inserita esiste gia'  <br>Torna indietro e scegli un'altra email.</p></font></h1>";
                echo"<form action='Registrati.php'>";
                    echo"<input class='button button1' type='submit' name='invia_dati' value='Torna Indietro' />";
                    echo"</form>";}
                   
        
            }
            
		  
			
		
                
            elseif($verita==TRUE) {
			
			$query = mysqli_query($conn,"INSERT into users(nome,cognome,email,psw) VALUES('$nome','$cognome','$email','$pass1')");
			
			
                echo "<h1><font size='20%' color='chocolate'><p><span STYLE='background:darkblue;'> La registrazione dei dati dell'utente e' avvenuta con successo. <br /></p></font></h1>";
                echo"<form action='loginAstro.html'>";
                    echo"<input type='submit' class='button button1' name='invia_dati' value='Login' />";
                    echo"</form>";
            }else
            {
                  echo "<h1><font size='20%' color='chocolate'><p><span STYLE='background:darkblue;'> Devi riempire tutti i campi <br>Torna indietro e riprova.</p></font></h1>";
                echo"<form action=''>";
                    echo"<input type='submit' name='invia_dati' value='Torna Indietro'  class='button button1'/>";
                    echo"</form>";}
            }
        
        
		?>
    
    
    
    
    
</body>
</head>
</html>
    