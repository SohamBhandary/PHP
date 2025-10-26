<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Selection (Checkbox)</title>
</head>
<body>
    <form action="" method="post">
        <input type="checkbox" value="Visa" name="card[]">Visa<br>
        <input type="checkbox" value="Credit" name="card[]">Credit<br>
        <input type="checkbox" value="Master" name="card[]">Master<br>
        <input type="submit" name="confirm" value="Confirm">
    </form>

    <?php
    if (isset($_POST["confirm"])) {
        if (!empty($_POST["card"])) {
            $selectedCards = $_POST["card"];
            echo "<p>You selected: <strong>" . implode(", ", $selectedCards) . "</strong> card(s).</p>";
        } else {
            echo "<p>Please select at least one card type.</p>";
        }
    }
    ?>
</body>
</html>
