<?php
include "fonction.php";
define('VAL_MIN',0);
define('VAL_MAX', 9);
$x=rand(VAL_MIN,VAL_MAX);
$y=rand(VAL_MIN,VAL_MAX);
echo "x =".$x. '<br>';
echo "y =".$y. '<br>';
$nbr=nombre($x,$y);
$per=permute($x,$y);
echo " le nombre est" .$nbr.'<br>';
echo "la permutaion est" .$per. '<br>';

?>