<?php
require_once("form.php");

if(isset($_POST["btnSubmit"])){

    $id=$_POST["txtid"];
    $name=$_POST["txtname"];
    $address=$_POST["txtaddress"];
   

    $student = new Student($id, $name, $address);
     $student->store();
     echo "Success!";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      
        <label for="txtid">ID:</label>
        <input type="text" name="txtid" id="txtid" required>
        <br>
        <br>
        <label for="txtname">Name:</label>
        <input type="text" name="txtname" id="txtname" required>
        <br>
        <br>
         <label for="txtaddress">Batch:</label>
        <input type="text" name="txtaddress" id="txtaddress" required>
        <br>
        <br>
       
        <input type="submit" name="btnSubmit" value="Submit">
     
    </form>
<?php
Student::showData();
?>
</body>

</html>