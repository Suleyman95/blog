<?php

$link = mysqli_connect( "localhost", "root", "0202", "base" );
$q = mysqli_query( $link, "SELECT * FROM `themes` ORDER BY `date` DESC" );
$i = 0;
?>

<?php while( $res = mysqli_fetch_assoc( $q ) ) : ?>
	<p><a href='?id=<?php echo $res[id] ?>'><?= $res['head']; ?></a></p>
	<?php $i++; ?>

<?php endwhile; ?>