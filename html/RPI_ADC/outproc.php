
<?php
	    
		$S2 =  $_POST['dir'];
		$S3 =   $_POST['trn'];
		$S4 = $_POST['gear'];
	    $myFile2 = "out.txt";
		$fh2 = fopen($myFile2, 'w') or die("can't open file");
		fwrite($fh2, '%'.$S2.';'.$S3.';'.$S4);
		fclose($fh2);
        //echo $S2.$S3;
 
?>

