<?php
function generaColoreRandom($max) {
   $characters = "0123456789abcdefghilmnopqstuvzxjywkABCDEFGHILMNOPQRSTUVZXYWKJ@#;<>!?";
   $str = "";
   for ($i = 0; $i < $max; $i++) {
      $str .= $characters[rand(1,strlen($characters))];
   }
   return $str;
}