<?php

if (isset($_GET['numeri'])) {
   $numeri = $_GET['numeri'];
} 

if (isset($_GET['lettereMinuscole'])) {
   $lettereMinuscole = $_GET['lettereMinuscole'];
} 

if (isset($_GET['lettereMaiuscole'])) {
   $lettereMaiuscole = $_GET['lettereMaiuscole'];
} 

if (isset($_GET['caratteriSpeciali'])) {
   $caratteriSpeciali = $_GET['caratteriSpeciali'];
} 

function generaColoreRandom($max, $num, $let, $LET, $sim) {

   $numeri = "0123456789";
   $lettereMinuscole = "abcdefghilmnopqstuvzxjywk";
   $lettereMaiuscole = "ABCDEFGHILMNOPQRSTUVZXYWKJ";
   $caratteriSpeciali = "@#;<>!?*/\\%&-_+-=|'";

   $characters = "";
   $str = "";

   if ($num == "on") {
      $characters .= $numeri;
   }
   
   if ($let == "on") {
      $characters .= $lettereMinuscole;
   }
   
   if ($LET == "on") {
      $characters .= $lettereMaiuscole;
   }

   if ($sim == "on") {
      $characters .= $caratteriSpeciali;
   }

   for ($i = 0; $i < $max; $i++) {
      $str .= $characters[rand(1, strlen($characters))];
   }
   return $str;
}