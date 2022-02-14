<?php
function nombrevalide($nbr, string $key,array & $error ):void{
    if (empty($nbr)){
        $error[$key]="veuillez entrer une valeur";   
    } 
    else{
        if (!is_numeric($nbr)){
            $error[$key]= "veuillez entrer un nombre";
        }
    }
}
function equation(int $a,int $b,int $c): void{
 $d=pow($b,2)-4*$a*$c;
 if ($d==0){
     $x0=(-1*$b)/(2*$a);
     echo "la solution est" .$x0. '<br>';
}
else  {
if ($d>0){
     $x1=(-1*$b-sqrt($d))/(2*$a);
     $x2=(-1*$b+sqrt($d))/(2*$a);
    echo  "les solutions sont". '<br>';
    echo $x1. "et".'<br>';
     echo $x2;
    }
   else {
       echo "pas de solution";
   }
}
}
?>