<?php
 /** Datenbankverbindung wird hergestellt
  *  Die Datenbank wird über Ihren Namen innerhalb
  * der Funktion ausgewählt. Bei einem Fehler, wird eine Nachricht ausgegeben.
  */
$con =  mysqli_connect('localhost','root','');
mysqli_select_db($con, "kundenkartei")
or die ("Verbindung zur Datenbank war nicht möglich...");

/**
* Eingabe aller Kundendaten, werden bei Bestätigung in Variablen gespeichert
* Die Variable id entsteht aus 4-stelligem Nachnamen + Zählernunmmer 
*/
if(isset($_POST['submit'])){
$knachname = $_POST['knachname'];
$zaehlerNr = $_POST['zaehlerNr'];
$vorname = $_POST['vorname'];
$email = $_POST['email'];
$telNr = $_POST['telNr'];
$note = $_POST['note'];
$id = substr($knachname,0,4);
$id .= $zaehlerNr;
//SQL erstellt mithilfe der Eingabewerte einen neuen Kunden
$sql = "INSERT INTO kunde (id,vorname,zaehlerNr,knachname,email,telNr,Bem)
values('$id','$vorname','$zaehlerNr','$knachname','$email','$telNr','$note')";

if($con->query($sql) === TRUE){
    echo "Sie haben sich erfolgreich registriert: 
   Willkommen '$vorname'";
   /** 
   * Werden hierbei Constraints der SQL ausgelöst, bspw. zwei gleiche Zählernummern
   *   werden die Daten nicht in die Datenbank geschrieben und eine Nachricht geworfen. 
   */
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
<a href="login.php">Logout</a>
<a href="auswahl.php">Home</a>
</body>
</html>