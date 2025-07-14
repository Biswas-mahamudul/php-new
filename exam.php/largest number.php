<!DOCTYPE html>
<html>
<head>
    <title>Largest Number</title>
</head>
<body>

    

    <form method="post" action="">
        Enter 1st number: <input type="number" name="num1" required><br><br>
        Enter 2nd number: <input type="number" name="num2" required><br><br>
        Enter 3rd number: <input type="number" name="num3" required><br><br>
        <input type="submit" name="submit" value="Find Largest">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $x = $_POST['num1'];
        $y = $_POST['num2'];
        $z = $_POST['num3'];

        if ($x >= $y && $x >= $z) {
            $largest = $x;
        } elseif ($y >= $x && $y >= $z) {
            $largest = $y;
        } else {
            $largest = $z;
        }

        echo "<h3>The largest number is: $largest</h3>";
    }
    ?>

</body>
</html>