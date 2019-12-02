<?php
$name = $_POST['name'];
$zaehlerNr = $_POST['zaehler'];

//to pretend mysql injection
$name = stripcslashes($name);
$zaehlerNr = stripcslashes($zaehlernNr);
$name = mysql_real_escape_string($name);
$zaehlerNr = mysql_real_escape_string($zaehlernNr);


mysql_connect("localhost", "root","");
mysql_select_db("kundenkartei");

$result = mysql_query("select * from kunden where name = '$name' and zaehlernNr = '$zaehlerNr'!") 
or die("Failed to query database".my_sql_error());

$row = mysql_fetch_array($result);
if ($row['name'] == $name && $row['zaehlerNr'] == $zaehlerNr){
    echo "Login success!!! Welcome ".$row['name'];
}else{
    echo "Failed to login";
}

?>