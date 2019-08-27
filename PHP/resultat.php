<?php
include('bdd.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Link Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Link CSS Personnel-->
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Accueil La Naissance Et L'évolution</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="./IMG/1024px-Centre_national_de_la_recherche_scientifique.svg.png" width="40" height="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Info</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
    <!--Fin Navbar-->
<div class="container">
<center><h1>RESULTAT DE LA RECHERCHE</h1></center>
    <?php

// On récupère tout le contenu de la table 

$reponse = $bdd->query('SELECT label FROM quartier');

// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Date demandée</strong> : <?php/* echo $donnees['Date'];*/ ?><br>
    Le Quartier est :<?php echo $donnees['label']; ?>,<br>
     et la rue est :<?php /*echo $donnees['label'];*/ ?> <br>
    Le nombre d'habitants est de <?php/*echo $donnees['Habitant'];*/ ?> 
   </p>
<?php


 // Fin du traitement de la requête

$reponse->closeCursor(); 
}
?>

      <!-- D�but du Footer -->
      <footer id="footer sticky-footer">
        <div class="container text-center">
            <small>Copyright &copy; 2019</small>
        </div>
    </footer>
    <!--Script Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>