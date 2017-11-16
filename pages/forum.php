<?php
include('../actions/auth.php');
include('../actions/compare.php');
$cook = $_COOKIE['temp_pass'];
//setcookie("temp_pass", $pass, time()-3600, "/");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<main id="main">
		<header id="header">
			<div class="log">
				<div class="logo">
					<p class="logo_p"><a href="/">Блог<br><span>WEB</span>-программиста</a></p>
				</div>
				<nav class="nav">
					<ul>
						<li><a href="../index.php">Блог</a></li>
						<li><a href="forum.php">Форум</a></li>
						<li><a href="">Обо мне</a></li>
						<li><a href="">Портфолио</a></li>
						<li><a href="">Отзывы</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div id="content">
			<section class="section">
				<article>
					<?php if($_GET['crt']==1) : ?>
						<?php include '../blocks/create-form.php'; ?>
					<?php else : ?>
						<?php include '../actions/show-themes.php'; ?>
					<?php endif; ?>
				</article>
			</section>
			<aside class="aside">
				<?php if($cook && $pas) : ?>
					<?php if($cook == $pas) : ?>
						<p><a href="?crt=1">Создать тему</a></p>
						<p><a href="../actions/logout.php?out=1">Выйти</a></p>
					<?php endif; ?>
				<?php else : ?>
					<?php echo $err ?>
					<?php include '../blocks/form-in.php'; ?>
				<?php endif; ?>
			</aside>
		</div>
		<footer id="footer">
			
		</footer>
	</main>
</body>
</html>