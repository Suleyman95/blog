<?php

$link = mysqli_connect( "localhost", "root", "0202", "base" );
$q = mysqli_query( $link, "SELECT * FROM `themes` ORDER BY `date` DESC" );
$i = 0;
while( $res = mysqli_fetch_assoc( $q ) ) {
	echo "<p><a href='?id=$res[id]'>{$res['head']}</a></p>";
	$i++;
}

?>
