<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" />
	<title>Logowanie</title>
</head>

<body>
	<header>
		<h1 id="logo">
			<img src="img/horse.png" /> SZACHY ONLINE
			<img src="img/horse.png" />
		</h1>
		<nav id="topnav">
			<ul class="menu">
				<li>
					<a href="index.php">Strona główna</a>
				</li>
				<li>
					<a href="ranking.php">Ranking</a>
				</li>
				<li>
					<a href="game.php">Rozgrywka</a>
				</li>
				<li>
					<a href="login.php">Logowanie</a>
				</li>
				<li>
					<a href="register.php">Rejestracja</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div id="logowanie">
			<article>
				<form>
					<input type="text" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" />

					<input type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" />


					<input type="submit" value="Zaloguj się" />

				</form>
			</article>
		</div>
	</main>
	<footer style="position:absolute;">
		Wszelkie prawa zastrzeżone &copy;
	</footer>
</body>

</html>