<?php
require_once("functions/db.php"); 
$name=$_POST["name"];
$phone=$_POST["phone"];
$sql= "insert into contacts(name,phone_number) 
                            values (
                                   '$name',
                                   '$phone'
                                    );";
insert($sql);
header("Location: index.php");