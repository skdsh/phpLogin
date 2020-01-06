    <?php
        //conncets to the server and select database
        $con =  mysqli_connect('localhost','root','');
        mysqli_select_db($con, "kundenkartei");

        $zaehlerNR = $_POST["zaehlernummer"];
        $zaehlerstand = $_POST["zaehlerstand"];
        $datum = date("d.m.Y");
        

        if($zaehlerstand == "" or $zaehlerNR == ""){
            echo "Du hast keinen Zählerstand angegeben!";
        }else{
            $eintrag = "INSERT INTO zaehlerstaende
            (zaehlerNR, zaehlerstand, aeDatum)
            VALUES 
            ('$zaehlerNR', '$zaehlerstand', '$datum')";
            $eintragen = mysqli_query($con, $eintrag);

            echo "Dein Zählerstand wurde übernommen!";
        }
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Wasserwerke Eingabe Zählerstand</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body id="body">
    <form method="post">
            Bitte geben sie nocheinmal ihre Zählernummer an, danke:<input type="text" name="zaehlernummer"></br>
            Bitte geben sie den Zählerstand ein:<input type="text" name="zaehlerstand">
            <input type="submit" value="Bestätigen!"/>
    </form>
	
    <a href="login.php">Login</a>
    <a href="auswahl.php">Home</a>

</body>
	
</html>