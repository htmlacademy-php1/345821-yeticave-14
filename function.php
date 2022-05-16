<?php

date_default_timezone_set("Europe/Moscow");

function retail_price(int $number)
{
    $numbers = ceil($number);
    $total_number = number_format($numbers, 0, '', ' ');

    if ($numbers < 1000) {
        $total_number = $numbers;
    }

    return $total_number . ' ₽';
}

function expired_time(string $val)
{
    $total_end = strtotime($val);
    $dt_now = time();
    $total_time = $total_end - $dt_now;
    $hours = floor($total_time / 3600);
    $minutes = floor(($total_time % 3600) / 60);

    return $hours . ' : ' . $minutes;
}

function view_class(string $val)
{
    $result = '';
    $total_end = strtotime($val);
    $dt_now = time();
    $total_time = $total_end - $dt_now;

    if ($total_time < 3600) {
        $result = 'timer--finishing';
    }

    return $result;
}
