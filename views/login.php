<?php
session_start();
$con =  mysqli_connect('localhost','root','');
mysqli_select_db($con, "kundenkartei");
//Get values from login.php
if(isset($_POST['submit'])){
$knachname = $_POST['knachname'];
$zaehlerNr = $_POST['zaehlerNr'];
//to pretend mysql injection
$knachname = stripcslashes($knachname);
$zaehlerNr = stripcslashes($zaehlerNr);
//shorten knachname String
$hash = password_hash($zaehlerNr, PASSWORD_DEFAULT);
if (password_verify($zaehlerNr, $hash)) {
//conncets to the server and select database


$select = "select * from kunde where  kunde.id = '$knachname$zaehlerNr'";
$result = mysqli_query($con, $select);

$num = mysqli_num_rows($result);

    echo "Login erfolgreich! Willkommen ";
    // Invalid credentials
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
<form method="post" >
<!--action="processLogin.php"-->
  <div id= frm>
   <p> <label for="knachname">Nachname:</label>
    <input type ="text" name="knachname" required />
</p>
<P>
    <label for="zaehlerNr">Password:</label>
    <input type ="text" name="zaehlerNr" required />
</p>
<p>
  <input type="submit" name="submit" id="btn" value= "Login"/>
  <!--
  <input type="submit" value="Login" id="btn" 
onClick="document.location.href='zaehlerstand.php'" />-->
  </p>
</form>
</div>
<a href="/views/register.php">Register</a> 

</body>
</html>