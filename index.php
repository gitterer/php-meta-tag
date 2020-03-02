<?php


$sourcefile = "";
$binary1 = fopen($sourcefile,'r');
$size = filesize($sourcefile);
$hex = "";
if ($size < 1){
     die("Error");
}
   while (!feof($binary1)) {
        $hexread = bin2hex(fread ($binary1 , 4 ));
         $hex = $hex.$hexread ;
    }

fclose($binary1);
echo $hex;

    
    
   
    
   
?>
