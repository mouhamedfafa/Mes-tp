<?php  
include "fonction.php"; 
define('VAL_MIN',1); 
define('VAL_MAX',100);  
$x=rand(VAL_MIN,VAL_MAX); 
$y=rand(VAL_MIN,VAL_MAX); 
echo "la valeur de x est" .$x.'<br>'; 
echo "la valeur de y est".$y.'<br>'; 
echo "la somme de x par y est" .somme($x,$y). '<br>'; 
echo "l'exposant de x".expox($x). "et celle de y est".expoy($y).'<b>';
echo "la difference est".diff($x,$y).'<br>';
echo "le produit est".produit($x,$y).'<br>';
echo "xmoduloy =" .modulo($x,$y). '<br>';
echo "la division de x par y est".division($x,$y).'<br>';
echo "le carré de x est".carrex($x). "le carre de y est" .carrey($y).'<br>';
?>


















