<?php
require_once("functions/db.php"); 
$id=$_GET["id"];
$sql="DELETE FROM contacts
WHERE id = $id;
";
update($sql);
header("Location: index.php");