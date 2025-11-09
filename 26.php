<?php
setcookie("fav_food","pizaa",time()+(864400*2),"/");
setcookie("fav_drink","soda",time()+(864400*3),"/");
setcookie("fav_dessrt","icecream",time()+(864400*3),"/");

foreach($_COOKIE as $key=>$value){
    echo "Key is {$key}= {$value}";
}
?>