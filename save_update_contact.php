<?php
require_once("functions/db.php"); 
$id=$_POST["id"];
var_dump($id); die("");
$name=$_POST["name"];
$phone=$_POST["phone"];
$sql= "UPDATE contacts
SET name= '$name',phone_number = '$phone'
WHERE id = $id;
";
update($sql);
header("Location: index.php");