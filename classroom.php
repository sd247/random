<?php
ini_set('memory_limit', '8024M');
$classroom = fopen("classroom.txt", 'w') or die("unable to open file!!");
for($i=1;$i<=20;$i++){
//$bulding = rand(1,20);
	for($j=0;$j<19;$j++){
		$capacity = rand(15,50);
		$room_number = rand(101,601);
		$data =  $i.'|'.$room_number.'|'.$capacity."\r\n";
		fwrite($classroom,$data);
	}	
}
fclose($classroom);
?>