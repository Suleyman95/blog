<?php

$link = mysqli_connect("localhost", "root", "0202", "base");
if( isset( $_POST['btn1'] ) ) {
	$head = $_POST['head']; $text = $_POST['text'];
	if( $head && $text ) {
		mysqli_query($link, "INSERT INTO themes VALUES( NULL, NOW(), '$head', '$text' )");
		header('Location: ../pages/forum.php');
	}
}

?>