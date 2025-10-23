<?php
$hours=40;
$rate=15;
$weeklyPay=1;

if($hours<=40){
    $weeklyPay=$hours*$rate;
}

echo "You made {$weeklyPay} inr this week";
?>