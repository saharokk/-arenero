<?php 
$myFile = "list.json";
$filedata = fopen($myFile, 'r');
$List = fread($filedata, filesize($myFile));
fclose($filedata);
echo $List;
?>
