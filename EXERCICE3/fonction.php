<?php
function somme($x,$y):float{
$som=$x+$y;
return$som;

}
function expox($x):float {
    $expox=exp($x);
    return$expox;
}
function expoy($y):float {
    $expoy=exp($y);
    return$expoy;
}
function diff($x,$y): float {
if ($x>=$y) ;
$diff=$x-$y;
return$diff;
}

function produit($x,$y): float{
$prod=$x*$y;
return$prod;
}
 function modulo($x,$y):float{
     $mod=$x%$y;
     return$mod;
 }
 function division($x,$y):float {
     $div=$x/$y;
     return$div;
 }
 function carrex($x):float {
     $carx=pow($x,2);
     return$carx;
 }
  function carrey($y):float {
    $cary=pow($y,2);
    return$cary;
}

?>