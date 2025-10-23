<?php
$temp=25;
$cloudy=true;

if($temp>=0 && $temp<=30){
    echo "weather is good";
}
if($temp>=0 || $temp<=30){
    echo "weather is bad";
}
if(!$cloudy){
    echo "its cloudy";
}
else{
    "its cloudy";
}
?>