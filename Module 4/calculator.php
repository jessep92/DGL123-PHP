<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Addition calculator</h1>
    <p>Please enter two numbers to find the sum:</p>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num_1">First Number</label>
        <input type="number" name="num_1" value="" min="0" required>
        <br><br>
        <label for="num_2">Second Number</label>
        <input type="number" name="num_2" value="" min="0" required>
        <br><br>
        <input type="submit" name="submit" value="Calculate Sum">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num_1'];
        $num2 = $_POST['num_2'];
        $sum = $num1 + $num2;
    echo "The sum is:" . $sum;
    }
    ?>
</body>
</html>