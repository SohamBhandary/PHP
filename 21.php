<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Selection</title>
</head>
<body>
    <form action="" method="post">
        <input type="radio" value="visa" name="card">Visa<br>
        <input type="radio" value="credit" name="card">Credit<br>
        <input type="radio" value="master" name="card">Master<br>
        <input type="submit" name="confirm" value="Confirm">
    </form>

    <?php
    if (isset($_POST["confirm"])) {
        if (!empty($_POST["card"])) {
            $creditcard = $_POST["card"];
            echo "<p>You selected: <strong>$creditcard</strong> card.</p>";
        } else {
            echo "<p>Please select a card type.</p>";
        }
    }
    ?>
</body>
</html>
