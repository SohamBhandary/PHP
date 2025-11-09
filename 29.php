<?php

foreach($_SERVER as $key => $value){
    echo "{$key} ={$value}"."<br>";
}

 echo $_SERVER["PHP_SELF"];
?>