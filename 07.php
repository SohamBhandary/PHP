<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="07.php" method="post">
        <label for="">X</label>
        <input type="text" name="X">
        <label for="">Y</label>
        <input type="text" name="Y">
        <input type="submit" value="total">

    </form>
    
</body>
</html>
<?php
$x=$_POST["X"];
$y=$_POST["Y"];
$total=null;
// $total=abs($x);
// $total=round($x);
// $total=floor($x);
// $total=ceil($x);
// $total=pow($x,$y);
// $total=sqrt($x,$y);
// $total=max($x,$y);
// $total=min($x,$y);
// $total=pi();
// $total=rand(1,1000);

echo $total;
?>