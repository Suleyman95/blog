<?php

$link = mysqli_connect( "localhost", "root", "0202", "base" );
$q = mysqli_query( $link, "SELECT * FROM `themes` WHERE `id` = $idTheme" );
?>

<?php while( $res = mysqli_fetch_assoc( $q ) ) : ?>
	<h2><?php echo $res['head']; ?></h2>
	<h3><?php echo $res['text']; ?></h3>

<?php endwhile; ?>