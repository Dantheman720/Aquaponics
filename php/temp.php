<?php
// sensor file
$file = '/sys/bus/w1/devices/28-0417c1ae7eff/w1_slave';

// read file line by line
$lines = file($file);

// temp on 2nd line
$temp = explode('=', $lines[1]);

// format
$temp = number_format($temp[1] / 1000, 1, '.', '');
echo $temp;
?>

