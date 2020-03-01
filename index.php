<?php

$sourcefile = "a.vbproj";
$binary1 = fopen($sourcefile,'r');
$size = filesize($sourcefile);
if ($size < 1){
     die("Error");
}
$binary = fread($binary1,$size);
fclose($binary1);
$hex    = dechex(bindec($binary));
echo $hex;

    
    
   
    
   
?>
