<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Wasserwerke Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body id="body">
     <!-- Auf der auswahl.php wird die nächste Aktion des Nutzers per Knopfdruck bestimmt. -->
    <form method="post" action="zaehlerstand.php" >
    <a href='processZae.php' class='button'><button>Eingabe Zählerstand</button></a>
    </form>
    <a href='register.php' class='button'><button>neuen Kunden anlegen</button></a>
    <form method="post" action="abfrage.php" >
    <a href='abfrage.php' class='button'><button>alle Zählerstände auflisten</button></a>
    </form>
    
</body>
	
</html>