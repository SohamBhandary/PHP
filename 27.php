<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is login page <br>
    <a href="28.php">This goes to nect page</a>
    
</body>
</html>
<?php

$_SESSION["username"]="soham";
$_SESSION["password"]="soham123";
echo $_SESSION["username"] ."<br>";
echo $_SESSION["password"] ."<br>";


?>