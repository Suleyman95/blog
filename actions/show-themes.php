<?php

$link = mysqli_connect("localhost", "root", "0202", "base");
$q = mysqli_query($link, "SELECT * FROM `themes` ORDER BY `date` DESC");
while( $res = mysqli_fetch_assoc( $q ) ) {
	echo "<p>{$res['head']}</p>";
}

?>
