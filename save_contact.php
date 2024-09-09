<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php"); ?>
<body>
<?php include_once("nav.php"); ?>       
</body>
</html>
<?php
require_once("functions/db.php"); 
$name=$_POST["name"];
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Invalid Name. Only letters and white space allowed";
  echo $nameErr; die("");
}

$phone=$_POST["phone"];
if (!is_numeric($phone)) {
       $phoneErr = "Invalid Phone number. Only numbers allowed";
       echo $phoneErr; die("");
     }
$sql= "insert into contacts(name,phone_number) 
                            values (
                                   '$name',
                                   '$phone'
                                    );";
insert($sql);
header("Location: index.php");
?>