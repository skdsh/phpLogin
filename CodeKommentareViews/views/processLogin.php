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

    echo "Login success!!! Welcome ".$num['$knachname'];
    // Invalid credentials
}else{
    echo "Failed to login";
    
}$con->close();
}