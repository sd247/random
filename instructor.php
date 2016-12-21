<?php
ini_set('memory_limit', '8024M');
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
$sf = 10000;
$limit = $sf*100;

		 $instructor_data = fopen("instructor.txt", "w") or die("unable to open file!!");
		 //$studentid = uniqid();
		 $instructorid = 10000;
		 for($i=0; $i<$limit; $i++){
                      //$p= $outoutArr[array_rand($outoutArr)] ." ".$outoutArr2[array_rand($outoutArr2)];
					  //echo "insert into student values ($p);";
					//  echo $p;
					//$f_name = $outoutArr[array_rand($outoutArr)];
					//$studentid = $student[mt_rand(0,sizeof($student) -1)];
					$dept = array('CSE','MTH','CHM','BIO','HUM','ECE','SWE','PSY');
					$salary = rand(30000,150000);
					$d_name = $dept[mt_rand(0, sizeof($dept) - 1)];
					$f_name = $outoutArr2[mt_rand(0, sizeof($outoutArr2) - 1)];
					//$l_name = $outoutArr2[array_rand($outoutArr2)];
					$l_name = $outoutArr[mt_rand(0, sizeof($outoutArr) - 1)];
					//$student_id = rand(1,90000000);
					$print = $instructorid.'|'.trim($f_name)." ". trim($l_name) .'|'. $d_name.'|'.$salary." "."\r\n";
					//$print = $f_name ." ". $l_name .'|'. "\r\n";
					//echo $print;
 					//$iarray[] = array('instructor'=>$instructor,'dpt'=>$d_name);
					fwrite($instructor_data,$print);
					//$sf = $sf - 1 ;
					$instructorid = $instructorid + 1;			
		}		 
		fclose($instructor_data);
?>
