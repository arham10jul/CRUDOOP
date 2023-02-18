<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Name</label>
<input type="text" name="txtname">
<input type="Submit" value="add" name="btnAdd">

    </form>
</body>
</html>
<?php
include("student.php");
$a=new database();
if(isset($_POST["btnAdd"]))
{
    $name=$_POST["txtname"];
    $check=$a->insert($name);
    if($check>0)
    {
        echo "<script>alert('data inserted!')</script>";
    }
}
?>