<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="05.php" method="get">
    <label for="">Username</label>
    <input type="text" name="usrname"><br>
      <label for="">Password</label>
    <input type="password" name="password"><br>
    <input type="submit">
    </form>
    
</body>
</html>

<?php

echo $_GET["usrname"];
echo "<br>";
echo $_GET["password"];

?>
