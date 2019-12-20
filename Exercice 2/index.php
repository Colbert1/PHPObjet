<?php require("User.php"); ?>
<?php require("Personnage.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="StylePHPObjet.css" rel="stylesheet">
    <title>PHP Objet</title>
</head>

<body>
    <h2> EXERCICE 2 :</h2>
    <?php
    $Perso1 = new Personnage(100, "");
    $Perso2 = new Personnage(100, "");

    ?>
    <p></p>
    <?php
    echo
        highlight_file(
            './' .
                basename(
                    __FILE__
                ),
            true
        );
    ?>
</body>

</html>