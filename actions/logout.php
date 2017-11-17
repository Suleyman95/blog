<?php
$link = mysqli_connect( "localhost", "root", "0202", "base" );
$a = $_COOKIE['user_id'];
if( $_GET['out'] == 1 ) {
	mysqli_query( $link, "DELETE FROM passwords WHERE user_id = $a" );
	setcookie( "temp_pass", $pass, time()-3600, "/" );
	setcookie( "user_id", $user_id, time()-3600, "/" );
	header( "Location: ../pages/forum.php" );
}

?>