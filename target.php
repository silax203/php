<!doctype html>
<html>
    <head>
        <title> Formulaire PHP</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleformulaire.css">
    </head>
    
    <body>
      <p>Bonjour

            <?php

                    echo $_POST['prenom'];
                    
            
            ?>

        fait comme chez toi </p>
        <p> HEU ? 
            <?php
                echo $_POST['prenom'];

            ?>
            c'est pas ton prenom ?
        </p>

        <p> mes escuse !!! </br>
        <a href="formulaire.php">click-ici</a> pour changer sa !
        <p>tu veut retourner sur le site <a href="index.html">click ici</a></p>
        </p>
        <?php 
        var_dump ($_POST);
        ?>
    </body>

</html>
