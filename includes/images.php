<?php
// echo "<script>console.log( 'hope' );</script>";
 $files = array();
 foreach (glob("assets/images/CraftEssences/*.png") as $file) {
   $files[] = $file;
   echo "<div class='carousel-cell'> <image class='carousel-image' src='$file'/> </div>";
 }

 
 ?>