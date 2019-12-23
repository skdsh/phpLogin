    <?php
    $con =  mysqli_connect('localhost','root','');
    mysqli_select_db($con, "kundenkartei");
        if ( $zaehlerstand = $_POST["zaehlerstand"]== TRUE) {
            echo "<script>alert('Geben Sie um sicher zu gehen 
            ein weiteres Mal Ihre Zählernummer ein:');</script>";
        } else {
            echo "<script>alert('Failure.');</script>";
        }
        
        if(isset($_POST['submit'])){
            $sql = "INSERT INTO zaehlerstand
            (zaehlerstand) VALUES 
            ('$zaehlerNr','$zaehlerstand')";
        if($con->query($sql) === TRUE){
            echo "Sie haben sich erfolgreich registriert: ";        
  
        }else{
            echo "Dein Zählerstand konnte nicht erfassst werden.
            Versuche es später nochmal!";
        } $con->close();
    }
?>
