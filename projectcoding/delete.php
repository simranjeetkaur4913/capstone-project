<?php
require('mysqli_connect.php');
$id = $_GET['id'];
$q = "DELETE FROM staff WHERE id = '$id'";
mysqli_query($dbc,$q);
header('location:staff-administration.php');
?>