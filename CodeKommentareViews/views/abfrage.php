    <?php        
        /** 
         * @author Arndt, Marco und Ebert, Jack Louis
         *  
         * Datenbankverbindung wird festgelegt und unter $con
         * gespeichert. Die Datenbank wird über Ihren Namen innerhalb
         * der Funktion ausgewählt.
         */
        $con =  mysqli_connect('localhost','root','');
        mysqli_select_db($con, "kundenkartei");
        
        /** Eingabe einer spezifischen Zählernummer oder "alle" entscheidet
        * über die Ausgabe 
        * der Ergebnisse nach Zählernummer geordnet.*/
        $ZNr = $_POST["zaehlerNr"];
        $res = mysqli_query($con, "SELECT * FROM zaehlerstaende WHERE zaehlerNr = '$ZNr'");
        $resall = mysqli_query($con, "SELECT * FROM zaehlerstaende ORDER BY zaehlerNr");
        $num = mysqli_num_rows($res);

        //Ausgabenformat der Zählerstände auf dem Bildschirm
        if($ZNr == "alle"){
            while($dsatz = mysqli_fetch_assoc($resall))
            {
            echo $dsatz["zaehlerNr"] . ",   " . $dsatz["zaehlerstand"] . ",   " . $dsatz["aeDatum"] . "<br />";
            }
        }

        while($dsatz = mysqli_fetch_assoc($res))
        {
        echo $dsatz["zaehlerNr"] . ",   " . $dsatz["zaehlerstand"] . ",   " . $dsatz["aeDatum"] . "<br />";
        }
    ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Datenausgabe</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body id="body">
            <form action="abfrage.php" method="post">
            Bitte geben sie nocheinmal ihre Zählernummer an:<input type="text" name="zaehlerNr">
            <input type="submit" value="Bestätigen!"/>
    </form>
	
    <a href="login.php">Login</a>
    <a href="auswahl.php">Home</a>

</body>
	
</html>