<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//-------- print_r---------------

$exemple=array("Valentin","J-R","Anne");
print_r($exemple);
echo "<br>";

//----------redline-----------------

//----------implode-----------------

echo implode($exemple);
echo "<br>";


//------------sprintf----------------
$nombre=21;
$texte="hello world";
$str=sprintf("je vais %u trouve un %s stage",$nombre,$texte);
echo $str;
echo "<br>";


//---------------date-------------------
date_default_timezone_set("europe/paris");
echo $str=date(" H \h\e\u\r\es ");
echo "<br>";
//---------------rand---------------------

$àléatoire=rand(0,5);
echo $àléatoire;
echo "<br>";
//--------------strlen--------------------
$a="Bonjour";
echo strlen($a);
echo "<br>";

//---------------table--------------------
$tab=["J-B","Yuliya","Omar"];
echo $tab[array_rand($tab)];
echo "<br>";
//----------------jeux vidéos-------------

$a = array("Titre", "nom", "date","plateforme");


$darkSouls = [
    'titre' => 'dark Souls',
    'nom' => 'fromSoftware',
    'date' => '2011',
    'plateforme' => 'ps4'
];

foreach($darkSouls as $clef1 => $valeur1){
    echo $clef1 . ' ' . $valeur1 . '</br>';
}


   
?>
    
</body>
</html>