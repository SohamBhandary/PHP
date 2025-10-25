<?php

$foods=array("apple","orange","banana","coconut");
$foods[0]="Guava";
array_push($foods,"Mango");
array_pop($foods);

echo $foods[0] ."<br>";
echo $foods[1] ."<br>";
echo $foods[2] ."<br>";
echo $foods[3] ."<br>";

foreach($foods as $f){
    echo "Looping using for-each:{$f}"."<br>";
}
?>