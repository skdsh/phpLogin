<?php
    $con =  mysqli_connect('localhost','root','');
    mysqli_select_db($con, "kundenkartei");
        if ( $zaehlerstand = $_POST["zaehlerstand"]== TRUE) {
            echo "<script>alert('Geben Sie um sicher zu gehen 
            ein weiteres Mal Ihre Zählernummer ein:');</script>";
        } else {
            echo "<script>alert('Failure.');</script>";
        }
        
        if(isset($_POST['submit'])){
            $sql = "INSERT INTO zaehlerstand
            (zaehlerstand) VALUES 
            ('$zaehlerNr','$zaehlerstand')";
        if($con->query($sql) === TRUE){
            echo "Sie haben sich erfolgreich registriert: ";        
  
        }else{
            echo "Dein Zählerstand konnte nicht erfassst werden.
            Versuche es später nochmal!";
        } $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wasserwerke <br/>
     Zählerstanderfassung</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body">
    <style>
    body{
  background-image: url("images/dark.jpg");
} </style>
    <form method="post">
    <!--form action="processZae.php"-->
<div id="frm">
    <p>
  <label for="zaehlerstand">Zählerstanderfassung:</label>
  <input type="text" id="zaehlerstand" name="zaehlerstand" required />
  <input type="submit" name="submit" id="btn" value="Weiter">
  <input type="button" value="Zurück" id="btnLogin" 
onClick="document.location.href='login.php'" />
  </p>
  </div>
    </form>
	
</body>
	
</html>