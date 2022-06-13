<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Page Indice </title>
</head>
<body>
    <?php
        if(!empty($_GET['id'])){
            $date = date("H:i:s");
            if ($_GET['id'] == "1") { echo "<h1>Indice 1</h1>".$date;}
            if ($_GET['id'] == "2") { echo "<h1>Indice 2</h1>".$date;}
            if ($_GET['id'] == "3") { echo "<h1>Indice 3</h1>".$date;}
        } else{
            // page indice sans ?id
            echo "<h1>Vous êtes sur la page Indice, des QrCodes sont cachés un peu partout dans l'IUT (pas d'id selectionné)</h1>";
        }
    ?>
</body>
</html>