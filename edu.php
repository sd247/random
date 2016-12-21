<?php 
$department = array('CSE','MTH','CHM','BIO','HUM','ECE','SWE','PSY');
//static int roomcounts;
function randomint($n){
	$rint = rand(1,$n)+1;
	echo $rint;
}
function randomdept(){
	$department = array('CSE','MTH','CHM','BIO','HUM','ECE','SWE','PSY');
	//echo array_rand($department);
	//echo $dept;
	$rand = $department[ rand(0, count($department)-1) ];
	echo $rand;
	deptindex($rand);
}
randomdept();
//randomint(10);
//$rand = $department[ rand(0, count($department)-1) ];
function deptindex($dept){
	$department = array('CSE','MTH','CHM','BIO','HUM','ECE','SWE','PSY');
	
	$index = array_search($dept, $department);
	echo $index;
}

function randnumdiff($n,$d){
$v;
	while(true){
	$v = randomint($n);
	if($v != $d){
	echo $v;
	}

	}	
}
randnumdiff(1,3);


?>
