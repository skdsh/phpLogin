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
    echo "Sie haben sich erfolgreich registriert: ";
    echo "Herr " + $knachname;
}else{
    echo "Sie haben beim eingeben der Daten nicht
    alle Hinweise beachtet!";
} $con->close();
}
?>
