<!--
    Jesse Peltonen
    DGL-123 Intro to PHP
    Week 4 | Module 4
    Last Modified: 09/28/21
-->
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
    <!-- Simple form for self handling PHP return.
        Action attribute source: Stackoverflow -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num_1">First Number</label>
        <input type="number" name="num_1" value="" min="0" required>
        <br><br>
        <label for="num_2">Second Number</label>
        <input type="number" name="num_2" value="" min="0" required>
        <br><br>
        <input type="submit" name="submit" value="Calculate Sum">
    </form>

    <?php // PHP Script 1.0 - Arithmetic calculation
    // Check user submitted data
    // True if variable exists || No return
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num_1'];
        $num2 = $_POST['num_2'];
        $sum = $num1 + $num2;
    echo "<br><h3>The sum is: " . $sum . "</h3>";
    }
    ?>
</body>
</html>