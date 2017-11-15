
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
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
						<li><a href="">Блог</a></li>
						<li><a href="pages/forum.php">Форум</a></li>
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
					
				</article>
			</section>
			<aside class="aside">
				<?php
				$cook = $_COOKIE['temp_pass'];
				if($cook){
					echo "<p>вы админ</p>";
				}
				?>
			</aside>
		</div>
		<footer id="footer">
			
		</footer>
	</main>
</body>
</html>