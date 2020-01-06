<?php

session_start();
$con =  mysqli_connect('localhost','root','');
mysqli_select_db($con, "kundenkartei");
//Werte bei Bestätigung der Eingabe werden übergeben
if(isset($_POST['submit'])){
$knachname = $_POST['knachname'];
$zaehlerNr = $_POST['zaehlerNr'];
//Verkürzt den String, falls \r, \n vorhanden 
$knachname = stripcslashes($knachname);
$zaehlerNr = stripcslashes($zaehlerNr);

$hash = password_hash($zaehlerNr, PASSWORD_DEFAULT);
//Passwort wird mit hash wieder entschlüsselt <-- vorher verschlüsselt
if (password_verify($zaehlerNr, $hash)) {



$select = "select * from kunde where  kunde.id = '$knachname$zaehlerNr'";
$result = mysqli_query($con, $select);

$num = mysqli_num_rows($result);
    // Erfolgreicher Login
    echo "Login erfolgreich! Willkommen ";
    // Falsche Eingabe von Kundennachname oder Zählernummer und andere Fehler
}else{
    echo "Login ist fehlgeschlagen";
    
}$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<h1>Login Page
<link rel="stylesheet" type="text/css" href="style.css">
</h1>
<body>
<style>
body{
  background-image: url("images/dark.jpg");
}
</style>
<form action= "auswahl.php" method="post" >
<!--bei Ausführung: "processLogin.php" und beide 
Felder(Nachname und Passwort) müssen ausgefüllt sein-->
  <div id= frm>
   <p> <label for="knachname">Nachname:</label>
    <input type ="text" name="knachname" required />
</p>
<P>
    <label for="zaehlerNr">Passwort:</label>
    <input type ="text" name="zaehlerNr" required />
</p>
<p>
  <input type="submit" name="submit" id="btn" value= "Login"/>
  </p>
</form>
</div>
<a href="/views/register.php">Register</a> 

</body>
</html>