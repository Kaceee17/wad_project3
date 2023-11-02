<?php
$conn = mysqli_connect ("localhost","root", "", "WAD_PROJECT3");
$result = mysqli_query ($conn,"SELECT * FROM student");
// var_dump($result);
var_dump(mysqli_fetch_object($result));
?>