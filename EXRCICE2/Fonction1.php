<?php
function perimetre($long,$larg):int
{
    $peri=($long+$larg)*2;
    return $peri;
}

function  surface($long,$larg):int{
$surf=$long*$larg;
return $surf;
}
function diagonal($long,$larg):int {   
$diag= sqrt(pow($long,2)+pow($larg,2));
return $diag;
}
?>
