<?php
setlocale(LC_TIME, 'fr_FR');

include('fonctions.php');


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/33a4e2f325.js"></script>
    <script type="text/javascript" src="script.js"></script>


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type='text/css' rel='stylesheet' href='style.css'/>

    <title>PHP - Session 1</title>
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="horloge">
                <p><?= strftime('%A %d %B %Y') ?>, il est <?= $hour ?>h</p>
            </div>
            <div class="titre">
                <h1>
                    <span>*********************</span><br />
                    <span>La machine à café PHP</span><br />
                    <span>*********************</span>
                </h1>
            </div>
            <br />
            <div class="corps">
                <h2>
                    <u>Liste des boissons disponibles</u>
                </h2>
                <h2 class="listeBoisson">

                    <?php
                    drinksListed();
                    ?>
                </h2>
                
                <hr />
                <div id="menu">
                    <?php include("forms.php") ?>
                </div>
            </div>
            <hr />
            <div>

                <br />

                <?php
                
                    showRecipe();

                ?>

            </div>
            <div class="recup">

            </div>
            <hr />
            <div class="compteur">
                <h3>
                    <span>Montant inséré :</span>
                    <br />
                    <span><?= $coinInserted ?> €uros</span>              
                </h3>
            </div>
        </div>
    </div>

</body>
</html>

