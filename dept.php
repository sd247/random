<?php
$dept = array('CSE','MTH','CHM','BIO','HUM','ECE','SWE','PSY');
$department = fopen("department.txt", "w") or die("unable to open file !!");
foreach($dept as $dpt){
	//"insert into `dept` 1,2,3 values('$dpt','".rand(1,20)."','".rand(500000,2000000)."');";
	//echo "INSERT INTO `department`(`dept_name`, `building`, `budget`) VALUES ('$dpt','".rand(1,20)."','".rand(500000,2000000)."'); \r\n";
	//$dept = $dpt;
	$building = rand(1,20);
	$budget = rand(500000,2000000);
	$fin = $dpt.'|'.$building.'|'.$budget."\r\n";
	fwrite($department,$fin);
}
fclose($department);
?>
	