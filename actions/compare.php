<?php
$link = mysqli_connect("localhost", "root", "0202", "base");
$var_compare = mysqli_query($link, "SELECT * FROM passwords");
$temp_pas = mysqli_fetch_array($var_compare);
$pas = $temp_pas['temp_password'];

?>