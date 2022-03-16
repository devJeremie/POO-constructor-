<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>


<?php
require_once 'Voiture.php';//connexion a mon fichier voiture.php
$voiture1 = new Voiture();
$voiture1->setCouleur("rouge");
$voiture1->setModele("Peugeot") ;
echo $voiture1->getCouleur();
echo $voiture1->getModele() .'<br>';
echo $voiture1::getVitesseMax().'<br>';
//si pas de fonction et que la constante est en public on ecrirai
//echo::HIGHSPEED;

$voiture2 = new Voiture() ;
$voiture2->setCouleur("noir");
$voiture2->setModele("citroen");
echo $voiture2->getCouleur() ;
echo $voiture2->getModele() .'<br>'.'<br>';




require_once 'Voiture.php';//connexion au fichier ou se trouve la class vélo donc fichier voiture.php
$velo1 = new Velo ("Grenat", "VTT", "2", false,2);
$velo2 = new Velo ("Vert kawasaki", "Bi-cross", "2", true,1, );
echo $velo1->getCouleur() .'<br>';          //|
echo $velo1->getType() .'<br>';            // |
echo $velo1->getNbRoue() .'<br>';          // |
echo $velo1->getElectrique() .'<br>';      // |   Affiche ce que l'on a appelé en echo
echo $velo2->getCouleur() .'<br>';         // |
echo $velo2->getType() .'<br>';            // |
echo $velo2->getNbRoue() .'<br>';         //  |
echo $velo2->getElectrique() .'<br>';      // |
?>
 <span class="table">TABLE VELO </span>
<section class="velo">
    <div class="cadre">
        <p>Vélo 1</p>
        <?php echo $velo1->getCouleur() .'<br>';
              echo $velo1->getType() .'<br>';
              echo $velo1->getNbRoue() .'<br>';
              echo $velo1->getElectrique() .'<br>';
        ?>
    </div>
    <div class="cadre">
        <p>Vélo 2</p>
        <?php echo $velo2->getCouleur() .'<br>';
              echo $velo2->getType() .'<br>';
              echo $velo2->getNbRoue() .'<br>';
              echo $velo2->getElectrique() .'<br>';
        ?>
    </div>
</section>


</body>
</html>

