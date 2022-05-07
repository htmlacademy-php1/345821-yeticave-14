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
 date_default_timezone_set("Europe/Moscow");
 function expired_time($val)
 {
$total_end = strtotime($val);
$dt_now = time();
$total_time = $total_end-$dt_now;
$hours = floor($total_time / 3600);
$minutes = floor(($total_time % 3600)/60);
return "$hours : $minutes" ;
}
  ?>


<?php
date_default_timezone_set("Europe/Moscow");
function change_class($val){
$total_end = strtotime($val);
$dt_now = time();
$total_time = $total_end-$dt_now;
$hours = floor($total_time / 3600);
$minutes = floor(($total_time % 3600)/60);
if ($hours < 1) {
$total = 'timer--finishing';
}
return $total ;
}
 ?>
