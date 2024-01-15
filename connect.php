<?php
$connect=new mysqli("localhost","root","","newdata");
if ($connect->connect_error) {
    die("Somthing wrong". $connect->connect_error);
}
$data ="SELECT * FROM users";
$qury = $connect->query("$data");
?>