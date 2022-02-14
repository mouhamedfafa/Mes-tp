<?php
include "Fonction1.php";

define('VAL_MIN',1) ;
define('VAL_MAX',100);
$long=rand(VAL_MIN,VAL_MAX);
$larg=rand(VAL_MIN,VAL_MAX);
echo "la longeur est" .$long. "la largeur est". $larg.'<br>';
echo "le perimetre est" .perimetre($long,$larg).'<br>';
echo "la surface est " .surface($long,$larg).'<br>';
echo "la diagonal est" .diagonal($long,$larg);
?>