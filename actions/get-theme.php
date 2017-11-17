<?php

$link = mysqli_connect( "localhost", "root", "0202", "base" );
$q = mysqli_query( $link, "SELECT * FROM `themes` WHERE `id` = $idTheme" );
?>

<?php while( $res = mysqli_fetch_assoc( $q ) ) : ?>
	<h3><?php print $res['head']; ?></h3>

<?php endwhile; ?>