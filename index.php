<h1>Exercices sur les date en PHP</h1>
<h2>Exercice 1</h2>

<?php
// Récupération du timestamp actuel (temps en secondes depuis le 1er janvier 1970 à 00h)
$aujourdhui = time();
// var_dump($time_now);
echo "A cet instant, le timestamp est : ", $aujourdhui," secondes depuis le 1er janvier 1970 à 00h.<br>";
echo "Equivaut à : ", date(" d/M/Y à H:m:s", $aujourdhui);
?>

<h2>Exercice 2</h2>

<?php
$date_naissance = mktime(9,15,45,10,3,1988);
$age = $aujourdhui - $date_naissance;
echo "Mon age est de $age secondes";
?>

<h2>Exercice 3</h2>

<?php

if( checkdate(2,29,1962) )
{
    echo "29 février 1962 : Date valide";
}
else
{
    echo "29 février 1962 : Date non valide";
}

?>

<h2>Exercice 4</h2>

<?php

// mktime() renvoie le timestamp pour le jour donné en paramètre
// On aurait pu utiliser également strtotime('03-03-1993');
$jour = mktime(0,0,0,3,3,1993);
$semaine = array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi");

// date('w') renvoie le numéro du jour de la semaine passé en second paramètre
// var_dump(date("w", $jour));
echo "Le ", date("d M Y", $jour), " était un ", $semaine[date('w', $jour)];

?>

<h2>Exercice 5</h2>

<?php

for( $i = 2005; $i <= 2052; $i++ )
{
    $date = mktime(0,0,0,1,1, $i);

    // date("L", $date) renvoie 1 si l'année passée en second paramètre est une année bissextile (= leap year en anglais) et 0 si non.
    if( date("L", $date) == 1 )
    {
        echo "L'année $i est bissextile.<br>";
    }
}

?>

<h2>Exercice 6</h2>

<?php

for( $i = 2023; $i <= 2030; $i++ )
{
    $date = mktime( 0,0,0,5,1, $i );

    if( date("w", $date) == 6 || date("w", $date) == 0 )
    {
        echo "1<sup>er</sup> Mai $i : Désolé<br>";
    }
    elseif( date("w", $date) == 5 || date("w", $date) == 1 )
    {
        echo "1<sup>er</sup> Mai $i : Week end prolongé<br>";
    }
}

?>

<h2>Exercice 7</h2>

<?php

for( $i = 2023; $i < 2030; $i++ )
{
    // easter_date() renvoie le jour de Paques par rapport à l'année passée en paramètre
    echo "Jour de Paques : ", date("d M Y", easter_date($i)), "<br>";
}

?>
