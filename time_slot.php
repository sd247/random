<?php
 $start = '08:00:00';
$end = '17:00:01';

$intrvl1 =  strtotime("1970-01-01 01:00:00 UTC");

$dateTimes1 = new DatePeriod(
    new DateTime($start),
    new DateInterval('PT'.$intrvl1.'S'),
    new DateTime($end)
);
$intrvl2 =  strtotime("1970-01-01 01:30:00 UTC");

$dateTimes2 = new DatePeriod(
    new DateTime($start),
    new DateInterval('PT'.$intrvl2.'S'),
    new DateTime($end)
);
/*foreach ($dateTimes as $dt) {
  echo $dt->format('H:i'), "<br>";
}
*/
$days=array("M","T","W","TH","F");
$days1=array("M","W","F");
$i=1;
foreach($days as $d )
{
	
if(in_array($d,$days1))
{

foreach ($dateTimes1 as $dt) {
  echo $i. "|" .$d. " | ";
  echo $dt->format('H:i'). " |  ";
 # echo $dt->format('H:i'), "\n";
  echo date('H:i', strtotime('+1 hours', $dt->getTimestamp()))."\n";
  $i++;
}	
}
else{

foreach ($dateTimes2 as $dt) {
  echo $i. "|" .$d. " | ";
  echo $dt->format('H:i'). " |  ";
  echo date('H:i', strtotime('+75 minute', $dt->getTimestamp()))."\n";
  #echo $dt->format('H:i'), "\n";
  $i++;
}	
}
	
}
?>
