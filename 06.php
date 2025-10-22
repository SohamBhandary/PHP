<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06.php" method="post">
        <label for="">Quantity</label>
        <br>
        <input type="text" name="Quantity">
        <br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

$quantity=$_POST["Quantity"];
echo "<br>";
echo "Total quantity is {$quantity}";

?>