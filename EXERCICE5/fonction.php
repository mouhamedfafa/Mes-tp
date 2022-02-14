<?php

function takes_array($arrayA,$arrayB) {
  $dist=sqrt(pow(($arrayB[0]-$arrayA[0]),2)+pow(($arrayB[1]-$arrayA[1]),2));
  return$dist;
}
?>