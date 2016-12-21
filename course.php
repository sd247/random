<?php
ini_set('memory_limit', '8024M');

$dept = array('CSE','MTH','CHM','BIO','HUM','ECE','SWE','PSY');
$str1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
function strings1($length1=10){
		global $str1;
		$str1=str_shuffle($str1);
	//$str1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$strlength1 = strlen($str1);
		$randomstring1 = '';
		for ($i = 0; $i < $length1; $i++){
			$randomstring1 .= $str1[mt_rand(0, $strlength1 - 1)];
		}
			return $randomstring1;	
}
$data = fopen("course.txt", "w") or die("unable to open file!!");
$course_id = 1;
$sf = 10000;
$limit = $sf*100*2.5;
foreach($dept as $dpt){
//$course_id = 1;
for($i=0; $i<321500;$i++){
	$title = strings1();
//	$tit = strings();
	$sub = substr($dpt,0,2);
	$s = rand(0,1);
	$sub1 = substr($dpt,0,1);
	//$sub1 = substr($tit,3,5);
	$course_title = $sub.''.$title.''.$sub1;
	$credits = rand(1,4);
	$c[] = array('course'=>$course_id);
	$final_value = $course_id.'|'.$course_title.'|'.$dpt.'|'.$credits."\r\n";
	fwrite($data,$final_value);
	echo $final_value;
	$course_id = $course_id+1;

	//echo "INSERT INTO `course`(`course_id`, `title`, `dept_name`, `credits`) VALUES ('$course_id','$title','$dpt','".rand(1,4)."'); \r\n";
}
fclose($course_data);
}
$pre = fopen("preq.txt","w") or die("unable to open file !!");
$limit = null;
$limit = $sf*100*2.5*0.9;
$preq = 5000000;
$z=0;
for($i=0;$i<$limit;$i++){
	$cour = $c[$i];
	$course = $cour['course'];
	$preq = $preq;
	$value = $course.'|'.$preq."\r\n";
	fwrite($pre,$value);
	$preq = $preq + 1;
	if($z == 321500){
		$z = 0;
	}else{
		$z++;
	}
}
fclose($pre);
?>