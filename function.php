<?php
function retail_price($number)
 {
$numbers = ceil($number);
    if ($numbers < 1000) {
          $total_number = $numbers;
        } else  {
          $total_number = number_format($numbers, 0,'', ' ');
        }
    return $total_number .' ₽';
}
?>

<?php

function expired_timeA($val)
{
$dt_end = date_create($val);
$dt_now = date_create("now");
$dt_diff = date_diff($dt_end, $dt_now);
$days_count = date_interval_format($dt_diff, "%a");
return $days_count ;
}
 ?>
 <?php
 date_default_timezone_set("Europe/Moscow");
 function expired_time($val)
 {

 $dt_end = ($val);
 $total_end = strtotime($dt_end);
$dt_now = time();
$total_time = $total_end-$dt_now;
$hours = floor($total_time / 3600);
$minutes = floor(($total_time % 3600)/60);
if ($hours < 1) {
 print '<div class="timer--finishing"> ';
}

return "$hours : $minutes" ;
}

  ?>
