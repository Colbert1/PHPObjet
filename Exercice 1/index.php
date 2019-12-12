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

    <h2> EXERCICE 1 :</h2>
    <h4>Question 2 :</h4>
    <?php
    $User1 = new User();
    $User1->AfficherUser();
    ?>
    <h4>Question 3 :</h4>
    <table>
        <tr>
            <td align="center">
                <p>User</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Nom: COLBERT</p>
                <p>Prénom: Grégoire</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>AfficherUser(): void</p>
            </td>
        </tr>
    </table>
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