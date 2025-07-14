<!DOCTYPE html>
<html>
<head>
    <title>Grade </title>
</head>
<body>


<form method="post" action="">
    <input type="text" name="grade" placeholder="e.g. a,b,c">
    <input type="submit" value="Check Result">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $grade = strtoupper(trim($_POST["grade"])); 
    if ($grade === "A+") {
        echo "<p>Outstanding</p>";
    } elseif ($grade === "A") {
        echo "<p>Very Good</p>";
    } elseif ($grade === "B") {
        echo "<p>Good</p>";
    } elseif ($grade === "C") {
        echo "<p>Poor</p>";
    } else {
        echo "<p>Fail</p>";
    }
}
?>

</body>
</html>
