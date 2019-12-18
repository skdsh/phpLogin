<?php
session_start();
//Get values from login.php
$knachname = $_POST['knachname'];
$zaehlerNr = $_POST['zaehlerNr'];
//to pretend mysql injection
$knachname = stripcslashes($knachname);
$zaehlerNr = stripcslashes($zaehlerNr);
//shorten knachname String


//conncets to the server and select database
$con =  mysqli_connect('localhost','root','');
mysqli_select_db($con, "kundenkartei");

$select = "select * from kunde where  kunde.id = '$knachname$zaehlerNr'";
$result = mysqli_query($con, $select);

$num = mysqli_num_rows($result);
if ($num == 1){
    echo "Login success!!! Welcome ".$num['knachname'];
}else{
    echo "Failed to login";
}
?>