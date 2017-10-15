
<?php
	    $S1 =  $_GET['state'];
	    $myFile1 = "in.txt";
		$fh1 = fopen($myFile1, 'w') or die("can't open file");
		
        $myFile = "out.txt";
        $fh = fopen($myFile, 'r');
        $theData = fread($fh, filesize($myFile));
        fclose($fh);
        echo $theData;


		
 
?>

