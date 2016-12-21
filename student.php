<?php
 // ini_set('memory_limit', '8024M');
	  $file = "name.txt";
        $file_open = fopen($file, 'r');

        $file_read = fread($file_open,filesize($file));

        fclose($file_open);

        $newline_ele = "\n";

        $data_split = explode($newline_ele, $file_read);

        $new_tab = "\t";

        $outoutArr = array();
        foreach ($data_split as $string)
        {
            $row = explode($new_tab, $string);
            if(isset($row['0']) && $row['0'] != ""){
            	$outoutArr[] = $row['0'];
				
            }
        }
		
$file = "surname.txt";
        $file_open = fopen($file, 'r');

        $file_read = fread($file_open,filesize($file));

        fclose($file_open);

        $newline_ele = "\n";

        $data_split = explode($newline_ele, $file_read);

        $new_tab = "\t";

        $outoutArr2 = array();
        foreach ($data_split as $string)
        {
            $row = explode($new_tab, $string);
            if(isset($row['0']) && $row['0'] != ""){
            	$outoutArr2[] = $row['0'];
            }
        }
		 
	//fclose($student_data); 

		 $sf = 10000;
		 $limit = $sf*2500;
		 $student_data = fopen("studentdata.txt", "w") or die("unable to open file!!");
		 $studentid = 9000000;	 
		 for($i=1; $i<=$limit; $i++){
					$dept = array('CSE','MTH','CHM','BIO','HUM','ECE','SWE','PSY');
					$totalcreadit = rand(30,130);
					$d_name = $dept[mt_rand(0, sizeof($dept) - 1)];
					$f_name = $outoutArr[mt_rand(0, sizeof($outoutArr) - 1)];
					//$l_name = $outoutArr2[array_rand($outoutArr2)];
					$l_name = $outoutArr2[mt_rand(0, sizeof($outoutArr2) - 1)];
					//$student_id = rand(1,90000000);
					$print = $studentid .'|'.trim($f_name) ." ". trim($l_name) .'|'. $d_name.'|'.$totalcreadit."\r\n";
					//$print = $f_name ." ". $l_name .'|'. "\r\n";
					//echo $print;	
					fwrite($student_data,$print);
					//$sf = $sf - 1 ;
					$sarray[] = array('studentid'=>$studentid,'dpt'=>$d_name);
					$studentid = $studentid + 1;
		}	
		 fclose($student_data);
		 $studentid = null;
         $f_name = null;
		 $l_name = null;
         $d_name = null;
         $totalcreadit = null;		 
		  
$limit = null;   
$instructorid = null;
$salary = null;
$limit = $sf*2500*0.9;
$adv = fopen("adv.txt","w") or die("unable to open file!!");
for($i=0;$i<$limit;$i++){
	//$sarray[] = $_SESSION['varname'];
	$sid = $sarray[$i];
	$student = $sid['studentid'];
	$adv1 = rand(10000,109999);
	$fvalue = $student.'|'.$adv1."\r\n";
	fwrite($adv,$fvalue);
}
fclose($adv);


?>
 
