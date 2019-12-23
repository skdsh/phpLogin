<?php

$con =  mysqli_connect('localhost','root','');
mysqli_select_db($con, "kundenkartei")
or die ("Verbindung zur Datenbank war nicht möglich...");
if(isset($_POST['submit'])){
$knachname = $_POST['knachname'];
$zaehlerNr = $_POST['zaehlerNr'];
$vorname = $_POST['vorname'];
$email = $_POST['email'];
$telNr = $_POST['telNr'];
$note = $_POST['note'];
$id = substr($knachname,0,4);
$id .= $zaehlerNr;

$sql = "INSERT INTO kunde (id,vorname,zaehlerNr,knachname,email,telNr,Bem)
values('$id','$vorname','$zaehlerNr','$knachname','$email','$telNr','$note')";
if($con->query($sql) === TRUE){
    echo "Sie haben sich erfolgreich registriert: 
    Willkommen '$vorname'";
    
}else{
    echo "Sie haben beim eingeben der Daten nicht
    alle Hinweise beachtet!";
} $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
<style>
body{
  background-image: url("images/dark.jpg");
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<form method="post">
<!--(form) action="processRegister.php" -->
<div id="frm">
<p>
  <label for="knachname">Name:</label>
  <input type="text" id="nname" name="knachname" required />
  </p>
  <p>
  <label for="zaehlerNr">Zähler Nummer:</label>
  <input type="text" id="name" name="zaehlerNr"  required />
  <p>
  <label for="vorname">Vorname:</label>
  <input type="text" id="vorname" name="vorname" required />
  </p>
  <p>
  <label for="Email">Email</label>
  <input type="text" id="email" name="email" required />
  </p>
  <p>
  <label for="telNr">Telefonnummer:</label>
  <input type="text" id="telNr" name="telNr" required />
  </p>
  <p>
  <label for="note">Bemerkung</label>
  <input type="text" id="note" name="note"/>
  </p>
  </div>
  <input type="submit" name="submit" id="btn" value="Register">
</form>
<a href="login.php">Login</a>
<a href="auswahl.php">Home</a>
</body>
</html>