<?php 
$limit = $sf*2500*0.9;
$adv = fopen("adv.txt","w") or die("unable to open file!!");
for($i=0;$i<$limit;$i++){
	$sarray[] = $_SESSION['varname'];
	$sid = $sarray[$i];
	$student = $sid['studentid'];
	$adv1 = rand(10000,109999);
	$fvalue = $student.'|'.$adv1."\r\n";
	fwrite($adv,$fvalue);
}
fclose($adv);
?>
