<?php
include_once "fontion.php";
if (isset($POST['btn_ok'])){
    $_POST['n']=$N;
    $_POST['post']=$_POST;
    $error=[];
    $_SESSION['post']=$_POST;
    verifie($N,'n', $error);
    validNombre($nbre,'n',$error );
   if (empty($error)){
       affiche($N);
    }
   else {
       $_SESSION=$error;
    header('location:index.php');
          exit();
   }
}
else {
    header('location:index.php');
    exit();
}
