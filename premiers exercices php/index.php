// exercice 0
// var variable = 5;
<?php
$var = 5;
echo $var;      //afiche mon resultat
?>

// exercice 1
<?php
$word = "c'est";
$word2 = "vie";
$word3 = "Simplon";
$word4 = "la";
echo "$word3 $word $word4 $word2" ;
?>

// exercice 2
<?php
$variable1 = 12;
$variable2 = 4;
echo $variable1 / $variable2 ;
?>

// exercice 3
<?php
$var = 'clement';
$var1 = 'extrapolation';
echo (strlen($var)+strlen($var1)); 
?>

// exercice 4
<?php
$maîtrise_du_code = 1000;
if ($maîtrise_du_code >= 1000){
    echo "je maîtrise tellement le code maintenant";
}
?>

// exercice 5
<?php
$chiffre_fetiche_sandrine = 7 ;
$chiffre_fetiche_xavier = 130 ;
$chiffre_fetiche_andre = 8 ;
$temp;

$temp = $chiffre_fetiche_sandrine;
$chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
$chiffre_fetiche_xavier = $temp;

echo $chiffre_fetiche_sandrine;
?>

//exercice 6
<?php
$compte = -100;
if ($compte > 0) {
    echo "Bravo, vous êtes un bon gestionnaire";
} else {
    echo "Vous faites vraiment n'importe quoi avec votre argent";
}
?>

// exercice 7
<?php
$vent = 31 ;
$houle = 10 ;
$cadence_vague = 8 ;

if ($vent > 30 & $houle <= 20) {
    echo "Tu peux aller surfer";
} if ($cadence_vague <= 10) {
    echo "Tu peux aller surfer";
} if ($vent < 30 & $houle <= 30 & $cadence_vague <= 8) {
    echo "Tu peux aller surfer";
} else {
    echo "Tu ne peux pas aller surfer";
}
?>

// exercice 8
<?php
$nombre_1 = 88 ;
$nombre_2 = 7 ;
$nombre_3 = 23 ;
$nombre_4 = 5 ;
$nombre_5 = 45 ;
$nombre_6 = 12 ;


?>


