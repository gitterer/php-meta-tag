<?php
//file directory
$file = "volcanic.jpg";
$binary = fopen($file,'r');
$size = filesize($file);
$hex = "";
//ensure file is not empty
if ($size < 1){
     die("Error");
}
   while (!feof($binary)) {
        $hexread = bin2hex(fread ($binary , 10 ));
         $hex = $hex.$hexread ;
    }

$str = substr($hex, strlen($hex) - 4);
if ($str <>  "ffd9"){
     die("Cannot append meta data to file");
}
$meta = bin2hex("Meta data");
$meta = $hex.$meta;
strpos($meta," ");
$bin = hex2bin($meta);   
//write file to disk
$file = fopen($file, 'w+');
fwrite($file, $bin);
fclose($file);
   
?>
