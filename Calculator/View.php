<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Credit Calculator</h2>
        
        <form require="Main." method="post">
            <label>Amout of money: </label>
            <input type="text" name="value"><br>

            <label>Percent: </label>
            <input type="text" name="percent"><br>

            <label>Month: </label>
            <input type="text" name="month"><br>

            <input type="submit" value="Submit">

        </form>
    </div>

    <?php

    require "Main.php";

    if (isset($_POST["value"], $_POST["percent"], $_POST["month"])) {

        $value = $_POST["value"];
        $percent = $_POST["percent"];
        $month = $_POST["month"];

        $over = overPaid($value, $percent);
        $total = totalPay($value, $percent);
        $monthly = perMonth($value, $percent, $month);

        echo "<div class='result'>";
        echo "<h3>Result:</h3>";
        echo "Overpayment: $over <br>";
        echo "Total: $total <br>";
        echo "Per month: " . round($monthly, 2) . "<br>";
        echo "</div>";
    }

?>


</body>
</html>