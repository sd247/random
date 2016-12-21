<?php
ini_set('memory_limit', '8024M');
$section = fopen("section.txt", "w") or die("unable to open file!!");
$sf = 10000;
$limit = $sf*100*2.5*3;
$courseid=1; 
for($i=1;$i<=$limit;$i++){
	$k = rand(1,3);
	for($j=1;$j<=$k;$j++){
		   
			$room_number = rand(101,601);
			$bulding = rand(1,20);
			$time_slot_id = rand(1,44);
			$sem = rand(1,2);
			if($sem == 1){
				$semester = "fall";
			}
			else{
				$semester = "spring";
			}
			$year = rand(2000,2015);
			$b[] = array('course'=>$i,'section'=>$j,'semester'=>$semester,'year'=>$year); 
			$final = $i.'|'.$j.'|'.$semester.'|'.$year.'|'.$bulding.'|'.$room_number.'|'.$time_slot_id ."\r\n";
			//echo $final;
			fwrite($section,$final);
	}
}
fclose($section);
$final = null;
$i = null;
$j = null;
$semester = null;
$year = null;
$bulding = null;
$room_number = null;
$time_slot_id = null;
$teaches = fopen("teaches10.txt", "w") or die("unable to open file!!");
//$instructorid = 10000;
$sf = 10000;
$limit = $sf*100*2.5*3*1.1;
$limit = 2572000;
for($i=1;$i<=$limit;$i++){
	$k = ($i%10 == 0)?2:1;
	for($j=1;$j<=$k;$j++){
		   $instructorid = rand(10000,1009999);
		    $bc = $b[$i];
		    $courseid = $bc['course'];
			$sectionid = $bc['section'];
			$semester = $bc['semester'];
			$year = $bc['year'];
			$final = $instructorid.'|'.$courseid.'|'.$sectionid.'|'.$semester.'|'.$year."\r\n";
			fwrite($teaches,$final);
			//echo $final;
			
	}
}
fclose($teaches);
$instructorid = null;
$courseid = null;
$sectionid = null;
$semester = null;
$year = null;
 
$takes = fopen("takes.txt", "w") or die("unable to open file!!");
//$instructorid = 10000;
$sf = 10000;
$limit = $sf*2500;
$z = 0;
for($i=1;$i<=$limit;$i++){
	//$k = ($i%10 == 0)?2:1;
	$studentid = rand(90000000,114999999);
	//$courseid = rand(1,2500000);
	$k = rand(2,7);
	for($j=1;$j<=$k;$j++){
		   //$instructorid = rand(10000,1009999);
		    $bc = $b[$z];
		    $course = $bc['course'];
			//$cid = $co[mt_rand(1, sizeof($co) - 1)];
			$sectionid = $bc['section'];
			$semester = $bc['semester'];
			$year = $bc['year'];
			$str1 = 'ABCDEF';
			$str1=str_shuffle($str1);
			$randomstring1 = "";
			$randomstring1 .= $str1[mt_rand(0,1)];
			//echo $randomstring1;
			$final = $studentid.'|'.$course.'|'.$sectionid.'|'.$semester.'|'.$year.'|'.$randomstring1."\r\n";
			fwrite($takes,$final);
			if($z == 7500000){
				$z = 0;
			}else{
				$z++;
			}
			//echo $final;
			
	}
} 
fclose($takes);
$final = null;
$studentid = null;
$courseid = null;
$sectionid = null;
$semester = null;
$year = null;
$randomstring1 = null;

?>