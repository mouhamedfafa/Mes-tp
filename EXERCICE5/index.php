<?php
include "fonction.php";
define('VAL_MIN',1);
define('VAL_MAX',10);
$Ax=rand(VAL_MIN,VAL_MAX);
$Ay=rand(VAL_MIN,VAL_MAX);
$Bx=rand(VAL_MIN,VAL_MAX);
$By=rand(VAL_MIN,VAL_MAX);
$arrayA=array
( $Ax,
  $Ay,
); 
$arrayB=array
( $Bx,
  $By,
);
$dist= takes_array($arrayA,$arrayB);
echo "le point A".var_dump($arrayA).'<br>';
echo "le point B".var_dump($arrayB).'<br>';
echo "la distance est" .$dist.'<br>';
?>
