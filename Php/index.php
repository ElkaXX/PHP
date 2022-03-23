<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>

<?php
    $Prenom='Yuliya';
    $Nom='Bert';
    $Age=55;
    $stagiaire=TRUE;
    
    if ($stagiaire ==TRUE) {
        echo" affiche  $Nom $Age $Prenom ";
  }
     else {
     echo "affiche vous pouvez répéter la question " ;   
    }
?>
<br>
<?php
        $a = 15;
        $b = 18;
        $c = 14;
        $moyenne=($a+$b+$c)/3;
        echo $moyenne;
        if ($moyenne >=15) {
            echo "affiche  bravo tu as $moyenne ";   
        }
        else {
            echo "affiche tu as une moyenne de $moyenne, je progresse!";
}
?>
<br>
<?php
$age=55;

echo "affiche $age";
if($age>=18 and $age<=25) { 
    echo " affiche je suis jeune";
}
elseif ($age>=26 and $age<=40) {
    echo " affiche je suis moins jeune";
}
else  {
    echo " affiche aie aie aie mon dos";
}

?>
<br>
<?php

$a = 1;
while ($a <= 10):
    echo " je vais trouver un stage et travailler en tant que développeur web <br>";
    $a++;
endwhile;
?>

<br>
<?php
for($i=0;$i<10;$i++){
    echo " je vais trouver un stage et travailler en tant que développeur web <br>";    
}
?>

<br>
<?php
$mois= array ("janvier","fevrier","mars","avril","mai","juillet","aout","septembre","octobre","novembre","decembre");
echo implode("<br>",$mois);
?>

<br>
<br>
<br>
<br>
<a href="index.php?add"><button>Afficher le formulaire</button></a>
<?php


if(isset($_GET['add'])) {
    include('form.php'); 
     }


if(isset($_POST['sexe'])) {

    $Nom=htmlspecialchars($_POST['Nom']);
    $Prenom=htmlspecialchars($_POST['Prenom']);
    $âge=htmlspecialchars($_POST['âge']);
    $sexe=htmlspecialchars($_POST['sexe']);

    echo"Votre nom est $Nom";
    echo"Votre prenom est $Prenom";
    echo"Votre âge est $âge";
    echo"Votre sexe est $sexe";
}
?>
<?php

include("head.php");
include("./includes/header.php");
include("./includes/footer.php");
?>

<br>
<?php

$exemple0 = "Je devieNs MeIlLeur";
$exemple0 = strtolower($exemple0);

$i=0;

while ($i<50) {
    echo "$exemple0 <br>" ;
    $i++;
}
$exemple01 = "mooouaaaaaaaahhhhhhhhhhhh";
$exemple01 = strtoupper($exemple01);

for ($j=1;$j<=50;$j++) {
    echo "$exemple01 <br>";
   } 
$exemple2 = 28.6;
$exemple2 = str_replace( ".",".", $exemple2);
echo "$exemple2 <br>" ;

?>

<?php
function print_r2($val){
    echo '<pre>';
    print_r($val);
    echo  '</pre>';
}

?>
  
</body>
</html>