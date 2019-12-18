    <?php
        $verbindung = phpmyadmin_connect("localhost", "kundenkartei", "Passwort")
        or die ("Fehler im System");
        phpmyadmin_select_db("kundenkartei")
        or die ("Verbindung zur Datenbank war nicht möglich...");
        $zaehlerstand = $_POST["zaehlerstand"];
        $datum = date("d.m.Y");
        $uhrzeit = date("H:i:s");
        if($zaehlerstand == ""){
            echo "Du hast keinen Zählerstand angegeben!";
        }else{
            
            $eintrag = "INSERT INTO zaehlerstand
            (zaehlerstand, datum, uhrzeit)
            VALUES 
            ('$zaehlerstand', '$datum', '$uhrzeit')";
            $eintragen = phpmyadmin_query($eintrag);
        }
?>