<?php
function affiche($N ):void
{ $i=1;
     for ($i==1;$i<=$N;$i++)
    echo $i;
}
 function verifie($N,string $key, array &$error):void 
 {
     if ($N<=0) {
     $error[$key]="veulliez donner une valleur positif superieur à zero";
     
     }
     if (!is_numeric($N)) {
         $error[$key]= "veilliez entrer une valeur";
     }
    else if (estVide($N)) {
        $error[$key]="veulliez donner une valleur";
     
        
    }
     
  
 }
 function estnbr($N):bool{
    return is_numeric($N);
     }
     function estVide($nbre):bool{
        return empty($nbre);
}

?>
