<?php
 
// For input
$size        = explode(' ', readline(''));
$expenditure = explode(' ', readline(''));

// Proccessing
$n            = $size[0];
$d            = $size[1];
$totalCheck   = $n - $d;
$notification = 0;

for ($x = $d; $x < $n; $x++) { 
    // median
    $median = 0;
    for ($y = 0; $y < $d ; $y++) { 
        $number = $x - $d + $y;
        $median = $median + $expenditure[$number];
    }
    $median = $median/$d;

    // total notifications
    if ($expenditure[$x] >= $median * 2) {
        $notification = $notification + 1;
    }
}

// For output
echo $notification;
?>
