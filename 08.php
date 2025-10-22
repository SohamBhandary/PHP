<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="08.php" method="post">
        <label for="">Enter the radius :</label>
        <input type="text" name="r">
        <input type="Submit" value="Calculate">
    </form>
    
</body>
</html>

<?php
$r=$_POST["r"];
$total=$r*3.14*2;
echo "The perimeter of circle with {$r} radius is {$total}";
?>