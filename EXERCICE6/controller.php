<?php
session_start();
include_once "fonction.php";
if (isset($_POST['Valider'])){
    $a= $_POST['a'];
    $b= $_POST['b'];
    $c= $_POST['c'];
    $error=[];
   $_SESSION['post']=$_POST;
   nombrevalide($a,'a',$error );
   nombrevalide($b,'b',$error );
   nombrevalide($c,'c',$error );
   if (empty($error)){
       equation($a, $b, $c);
   }
   else {
       $_SESSION['error']=$error;
       header('location: index.php');
       exit();
    }
}
else { header('location: index.php');
    exit(); 
}
?>